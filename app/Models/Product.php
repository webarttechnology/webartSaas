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

        $query = $this->db->prepare("UPDATE products SET $setValues , deleted_at = null WHERE id = :id");

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

    public  function updateProductCategory($id, $data)
    {

        $setValues = '';

        foreach ($data as $key => $value) {
            $setValues .= "$key=:$key, ";
        }

        $setValues = rtrim($setValues, ', ');

        $query = $this->db->prepare("UPDATE `product_categories` SET $setValues WHERE product_id = :id");

        $query->bindValue(':id', $id);

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
        $columns = implode(', ', array_map(function ($key) {
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
        $query = $this->db->query("SELECT * FROM products WHERE deleted_at IS NULL AND is_vendor = 0");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getVendorProductAll()
    {
        $query = $this->db->query("SELECT * FROM products WHERE deleted_at IS NULL AND is_vendor = 1");
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
        WHERE c.deleted_at IS NULL
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


    public  function createVendorVariants($data)
    {
        $columns = implode(', ', array_map(function ($key) {
            return "`$key`";
        }, array_keys($data)));
        $values = ':' . implode(', :', array_keys($data));
        $query = $this->db->prepare("INSERT INTO vendor_variants ($columns) VALUES ($values)");
        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }
        $query->execute();
        return true;
    }


    public  function updateVendorVariants($id, $data)
    {
        $setValues = '';

        foreach ($data as $key => $value) {
            $setValues .= "$key=:$key, ";
        }

        $setValues = rtrim($setValues, ', ');

        $query = $this->db->prepare("UPDATE vendor_variants SET $setValues WHERE variant_id = :id");

        $query->bindValue(':id', $id);

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $query->execute();
        return true;
    }

    public function deleteStoreProductss($id)
    {
        $query = "UPDATE FROM `products` WHERE vendor_product_id = :id SET deleted_at = NOW(),";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return true;
    }

    public function deleteStoreProduct($id)
    {
        try {
            $this->db->beginTransaction();

            // Update products table
            $queryProducts = "UPDATE `products` SET deleted_at = NOW() WHERE vendor_product_id = :id";
            $stmtProducts = $this->db->prepare($queryProducts);
            $stmtProducts->bindValue(':id', $id);
            $stmtProducts->execute();

            // Update product_categories table
            $queryCategories = "UPDATE `product_categories` SET deleted_at = NOW() WHERE product_id = (SELECT id FROM products WHERE vendor_product_id = :id)";
            $stmtCategories = $this->db->prepare($queryCategories);
            $stmtCategories->bindValue(':id', $id);
            $stmtCategories->execute();

            // Update product_media table
            $queryMedia = "UPDATE `product_media` SET deleted_at = NOW() WHERE product_id = (SELECT id FROM products WHERE vendor_product_id = :id)";
            $stmtMedia = $this->db->prepare($queryMedia);
            $stmtMedia->bindValue(':id', $id);
            $stmtMedia->execute();

            // Update vendor_variants table
            $queryVariants = "UPDATE `vendor_variants` SET deleted_at = NOW() WHERE product_id = (SELECT id FROM products WHERE vendor_product_id = :id)";
            $stmtVariants = $this->db->prepare($queryVariants);
            $stmtVariants->bindValue(':id', $id);
            $stmtVariants->execute();

            $this->db->commit();
            return true;
        } catch (\Exception $e) {
            $this->db->rollBack();
            return false;
        }
    }

    // public function getVendorVariant($id)
    // {
    //     $query = "SELECT * FROM `products` WHERE vendor_product_id = :id";
    //     $query = $this->db->prepare($query);
    //     $query->bindValue(':id', $id);
    //     $query->execute();
    //     return $query->fetchAll(PDO::FETCH_OBJ);
    // }

    public function getVendorVariant($id)
    {
        $query = "
        SELECT vv.*
        FROM `vendor_variants` vv
        JOIN `products` p ON vv.product_id = p.id
        WHERE p.vendor_product_id = :id
        AND p.deleted_at IS NULL
        AND vv.deleted_at IS NULL
    ";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProductByVendorId($id)
    {
        $query = "SELECT * FROM `products` WHERE `vendor_product_id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function checkvendorproduct($id)
    {
        $query = "SELECT * FROM `products` WHERE `vendor_product_id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
       // Check if any rows are returned
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // public function deleteProductByVendoridss($id)
    // {
    //     $queryProducts = "UPDATE `products` SET deleted_at = NULL WHERE vendor_product_id = :id";
    //     $stmtProducts = $this->db->prepare($queryProducts);
    //     $stmtProducts->bindValue(':id', $id);
    //     $stmtProducts->execute();
    //     return $stmtProducts->fetch(PDO::FETCH_OBJ);
    // }

    public function deleteProductByVendorid($id)
    {
        try {
            $this->db->beginTransaction();
    
    
            // Delete from product_categories table
            $queryCategories = "DELETE FROM `product_categories` WHERE product_id = (SELECT id FROM products WHERE vendor_product_id = :id)";
            $stmtCategories = $this->db->prepare($queryCategories);
            $stmtCategories->bindValue(':id', $id);
            $stmtCategories->execute();
    
            // Delete from product_media table
            $queryMedia = "DELETE FROM `product_media` WHERE product_id = (SELECT id FROM products WHERE vendor_product_id = :id)";
            $stmtMedia = $this->db->prepare($queryMedia);
            $stmtMedia->bindValue(':id', $id);
            $stmtMedia->execute();
    
            // Delete from vendor_variants table
            $queryVariants = "DELETE FROM `vendor_variants` WHERE product_id = (SELECT id FROM products WHERE vendor_product_id = :id)";
            $stmtVariants = $this->db->prepare($queryVariants);
            $stmtVariants->bindValue(':id', $id);
            $stmtVariants->execute();
    
            
            // Delete from products table
            $queryProducts = "UPDATE `products` SET deleted_at = NOW() WHERE vendor_product_id = :id";
            $stmtProducts = $this->db->prepare($queryProducts);
            $stmtProducts->bindValue(':id', $id);
            $stmtProducts->execute();

            $this->db->commit();
            return true;
        } catch (\Exception $e) {
            $this->db->rollBack();
            return false;
        }
    }
    
}
