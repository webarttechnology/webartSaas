<?php

namespace App\Models;

use PDO;
use Core\Database;


class Cart
{

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public  function insertCart($data)
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $query = $this->db->prepare("INSERT INTO carts ($columns) VALUES ($values)");

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $success = $query->execute();

        if ($success) {
            // Get the ID of the newly inserted row
            $id = $this->db->lastInsertId();

            // Fetch the newly inserted data
            $query = $this->db->prepare("SELECT * FROM carts WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();

            return $query->fetch(PDO::FETCH_OBJ);
        } else {
            return false; // or throw an exception
        }
    }


    public function getCart()
    {

    //     $uuid = isset($_SESSION['unique_id']) ? $_SESSION['unique_id'] : null;
    //     $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    //     $query = $this->db->prepare("
    //     SELECT c.*, p.* 
    //     FROM carts c
    //     JOIN products p ON c.prod_id = p.id
    //     WHERE " . ($user_id ? "c.user_id = :user_id" : "c.uuid = :uuid") . "
    //    ");
    //     if ($user_id) {
    //         $query->bindParam(':user_id', $user_id);
    //     } else {
    //         $query->bindParam(':uuid', $uuid);
    //     }
    //     $query->execute();
    //     return $query->fetchAll(PDO::FETCH_OBJ);


        $uuid = isset($_SESSION['unique_id']) ? $_SESSION['unique_id'] : null;
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        $query = $this->db->prepare("
            SELECT c.*, p.*, (p.base_price * c.quantity) AS total_price
            FROM carts c
            JOIN products p ON c.prod_id = p.id
            WHERE " . ($user_id ? "c.user_id = :user_id" : "c.uuid = :uuid") . "
        ");
        if ($user_id) {
            $query->bindParam(':user_id', $user_id);
        } else {
            $query->bindParam(':uuid', $uuid);
        }
        $query->execute();
        $cartItems = $query->fetchAll(PDO::FETCH_OBJ);

        $grandTotal = 0;
        foreach ($cartItems as $item) {
            $grandTotal += $item->total_price;
        }

         // Fetch cart count
        $queryCount = $this->db->prepare("
        SELECT COUNT(*) AS cart_count
        FROM carts
        WHERE " . ($user_id ? "user_id = :user_id" : "uuid = :uuid")
        );

        if ($user_id) {
            $queryCount->bindParam(':user_id', $user_id);
        } else {
            $queryCount->bindParam(':uuid', $uuid);
        }

        $queryCount->execute();
        $resultCount = $queryCount->fetch(PDO::FETCH_ASSOC);
        $cartCount = $resultCount['cart_count'];

        return [
            'cartItems'     => $cartItems,
            'grandTotal'    => $grandTotal,
            'cartCount'     => $cartCount
        ];

    }



    public function updateCartss($id, $quantity)
    {
        $uuid = isset($_SESSION['unique_id']) ? $_SESSION['unique_id'] : null;
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        $query = "UPDATE carts SET
            `quantity` = :quantity
            WHERE `prod_id` = $id";
        $query = $this->db->prepare($query);
        $query->bindValue(':quantity', $quantity);
        $query->execute();
        return true;
    }

    public function updateCart($id, $quantity)
    {
        $uuid = isset($_SESSION['unique_id']) ? $_SESSION['unique_id'] : null;
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        $condition = "";
        if ($uuid !== null) {
            $condition = "WHERE `uuid` = :uuid";
            $param = $uuid;
        } elseif ($user_id !== null) {
            $condition = "WHERE `user_id` = :user_id";
            $param = $user_id;
        }
        $query = "UPDATE `carts` SET `quantity` = :quantity $condition AND `prod_id` = :id";

        $query = $this->db->prepare($query);
        $query->bindValue(':quantity', $quantity);
        $query->bindValue(':id', $id);

        if ($uuid !== null) {
            $query->bindValue(':uuid', $param);
        } elseif ($user_id !== null) {
            $query->bindValue(':user_id', $param);
        }

        $query->execute();
        return true;
    }


    // public function deleteCarts($productId)
    // {
    //     $query = "DELETE FROM carts WHERE prod_id = :productId";
    //     $stmt = $this->db->prepare($query);
    //     $stmt->bindValue(':productId', $productId);
    //     $stmt->execute();
    //     return true;
    // }

    public function deleteCart($productId)
    {
        $uuid = isset($_SESSION['unique_id']) ? $_SESSION['unique_id'] : null;
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

        $query = "DELETE FROM carts WHERE prod_id = :productId ";
        if ($user_id) {
            $query .= "AND user_id = :user_id";
        } else {
            $query .= "AND uuid = :uuid";
        }

        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':productId', $productId);
        if ($user_id) {
            $stmt->bindValue(':user_id', $user_id);
        } else {
            $stmt->bindValue(':uuid', $uuid);
        }
        $stmt->execute();
        return true;
    }



    public function checkCart($uuid)
    {
        $query = "SELECT id FROM carts WHERE uuid = :uuid";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':uuid', $uuid);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    // public function addToCartss($user_id, $uuid)
    // {

    //     $query = "UPDATE carts SET
    //     `user_id` = :user_id,
    //     `uuid` = NULL
    //     WHERE `uuid` = :uuid";
    //     $query = $this->db->prepare($query);
    //     $query->bindValue(':user_id', $user_id);
    //     $query->bindValue(':uuid', $uuid);
    //     $query->execute();
    //     return true;
    // }


    public function addToCart($user_id, $uuid)
    {
        // Get all cart items where user_id is the same as $user_id
        $query = "SELECT * FROM carts WHERE user_id = :user_id";
        $query = $this->db->prepare($query);
        $query->bindValue(':user_id', $user_id);
        $query->execute();
        $cartItems = $query->fetchAll(PDO::FETCH_OBJ);

        $query = "SELECT * FROM carts WHERE uuid = :uuid";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':uuid', $uuid);
        $stmt->execute();
        $checkcart = $stmt->fetchAll(PDO::FETCH_OBJ);

        $array = [];

        foreach ($checkcart  as $check) {
            $array[$check->prod_id] = $check;
        }

        // Check if $checkcart->prod_id is available in the cart
        foreach ($cartItems as $cartItem) {
            if (isset($array[$cartItem->prod_id])) {
                // Update the quantity
                $newQuantity = $cartItem->quantity + $array[$cartItem->prod_id]->quantity;
                $updateQuery = "UPDATE carts SET quantity = :quantity WHERE id = :id";
                $updateQuery = $this->db->prepare($updateQuery);
                $updateQuery->bindValue(':quantity', $newQuantity);
                $updateQuery->bindValue(':id', $cartItem->id);
                $updateQuery->execute();

                // Delete $checkcart->id
                $deleteQuery = "DELETE FROM carts WHERE id = :id";
                $deleteQuery = $this->db->prepare($deleteQuery);
                $deleteQuery->bindValue(':id', $array[$cartItem->prod_id]->id);
                $deleteQuery->execute();
            }
        }
        // If the product is not in the cart, simply update the cart with the new user_id and uuid
        $updateQuery = "UPDATE carts SET user_id = :user_id, uuid = NULL WHERE uuid = :uuid";
        $updateQuery = $this->db->prepare($updateQuery);
        $updateQuery->bindValue(':user_id', $user_id);
        $updateQuery->bindValue(':uuid', $uuid);
        $updateQuery->execute();

        return true;
    }

    // public function checkProdinCart()
    // {
    //     $uuid = isset($_SESSION['unique_id']) ? $_SESSION['unique_id'] : null;
    //     $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    //     $query = "SELECT COUNT(*) AS count FROM `carts` WHERE ";

    //     if ($uuid !== null) {
    //         $query .= "uuid = :uuid";
    //         $params = ['uuid' => $uuid];
    //     } elseif ($user_id !== null) {
    //         $query .= "user_id = :user_id";
    //         $params = ['user_id' => $user_id];
    //     } else {
    //         // Handle both $uuid and $user_id being null
    //         return null;
    //     }

    //     // Add condition to check for prod_id
    //     // $query .= " AND prod_id = :prod_id";
    //     // $params['prod_id'] = $prod_id;

    //     $stmt = $this->db->prepare($query);
    //     $stmt->execute($params);
    //     $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //     return $result['count'] > 0;
    // }


    public function checkProdinCart($prod_id)
    {
        $uuid = isset($_SESSION['unique_id']) ? $_SESSION['unique_id'] : null;
        $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
        // fire($uuid);
        $query = "SELECT COUNT(*) AS count FROM `carts` WHERE ";
        if ($uuid !== null) {
            $query .= "uuid = :uuid";
            $params = ['uuid' => $uuid];
        } elseif ($user_id !== null) {
            $query .= "user_id = :user_id";
            $params = ['user_id' => $user_id];
        }

        $query .= " AND prod_id = :prod_id";
        $params['prod_id'] = $prod_id;

        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['count'] > 0;
    }
}
