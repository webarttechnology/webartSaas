<?php

namespace App\Models;

use PDO;
use Core\Database;


class Product
{

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public  function createProduct($data)
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $query = $this->db->prepare("INSERT INTO products ($columns) VALUES ($values)");

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $success = $query->execute();

        if ($success) {
            // Get the ID of the newly inserted row
            $id = $this->db->lastInsertId();

            // Fetch the newly inserted data
            $query = $this->db->prepare("SELECT * FROM products WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();

            return $query->fetch(PDO::FETCH_OBJ);

        } else {
            return false; // or throw an exception
        }

    }

    public  function updateProduct($id, $data)
    {
        
        $setValues = '';

        foreach ($data as $key => $value) {
            $setValues .= "$key=:$key, ";
        }

        $setValues = rtrim($setValues, ', ');

        $query = $this->db->prepare("UPDATE products SET $setValues WHERE id = :id");

        $query->bindValue(':id', $id);

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $query->execute();
        return true;
    }

    public  function createProductCategory($data)
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        $query = $this->db->prepare("INSERT INTO product_categories ($columns) VALUES ($values)");
        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }
        $query->execute();
        return true; 
    }

    public  function createProductMedia($data)
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));
        $query = $this->db->prepare("INSERT INTO product_media ($columns) VALUES ($values)");
        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }
        $query->execute();
        return true; 
    }

    public  function createProductVariation($data)
    {
        $columns = implode(', ', array_map(function($key) {
            return "`$key`";
        }, array_keys($data)));
        $values = ':' . implode(', :', array_keys($data));
        $query = $this->db->prepare("INSERT INTO product_variations ($columns) VALUES ($values)");
        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }
        $query->execute();
        return true; 
    }


    public function getProductAll()
    {
        $query = $this->db->query("SELECT * FROM products");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProduct($id)
    {
        $query = "SELECT * FROM products WHERE `id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }


    public function getProductCategory($id)
    {
        $query = "SELECT * FROM product_categories WHERE `product_id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProductMedia($id)
    {
        $query = "SELECT * FROM product_media WHERE `product_id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProductVeriation($id)
    {
        $query = "SELECT * FROM product_variations WHERE `product_id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    public function deleteProductMedia($id)
    {
        $query = "DELETE FROM product_media WHERE `id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return true;
    }

    public function deleteProductCategory($id)
    {
        $query = "DELETE FROM product_categories WHERE `id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return true;
    }

    public function getProductMediaFile($id)
    {
        $query = "SELECT * FROM product_media WHERE `id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function deleteOldProductCategory($id)
    {
        $query = "DELETE FROM product_categories WHERE `product_id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return true;
    }


    public function deleteOldProductVeriation($id)
    {
        $query = "DELETE FROM product_variations WHERE `product_id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return true;
    }


    public function getCategoryProductAll()
    {
        $query = $this->db->query("SELECT p.*, pc.category_id, c.name as categoryname
        FROM `products` p
        LEFT JOIN `product_categories` pc ON p.id = pc.product_id
        LEFT JOIN `categories` c ON pc.category_id = c.id
        ORDER BY RAND() LIMIT 8");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProductByID($id)
    {
        $query = "SELECT p.*, pc.category_id, c.name as categoryname
        FROM `products` p
        LEFT JOIN `product_categories` pc ON p.id = pc.product_id
        LEFT JOIN `categories` c ON pc.category_id = c.id
        WHERE p.id = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getFeaturedProduct($prod_id, $cat_id)
    {
        $query = "SELECT p.* FROM `products` p
            JOIN `product_categories` pc ON p.id = pc.product_id
            WHERE pc.category_id = :cat_id AND p.id <> :prod_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':cat_id', $cat_id, PDO::PARAM_INT);
        $stmt->bindParam(':prod_id', $prod_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProductMediaByProdid($id)
    {
        $query = "SELECT * FROM `product_media` WHERE `product_id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProductColor($id)
    {
        $query = "SELECT * FROM `product_variations` WHERE `product_id` = :id AND `option` = 'color' ";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProductSize($id)
    {
        $query = "SELECT * FROM `product_variations` WHERE `product_id` = :id AND `option` = 'size' ";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    



}
