<?php

namespace App\Models;

use PDO;
use Core\Database;


class Category
{

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public  function insertCategory($data)
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $query = $this->db->prepare("INSERT INTO categories ($columns) VALUES ($values)");

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $success = $query->execute();

        if ($success) {
            // Get the ID of the newly inserted row
            $id = $this->db->lastInsertId();

            // Fetch the newly inserted data
            $query = $this->db->prepare("SELECT * FROM categories WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();

            return $query->fetch(PDO::FETCH_OBJ);
        } else {
            return false; // or throw an exception
        }
    }

    public function getCategory()
    {
        $query = $this->db->query("SELECT * FROM categories WHERE `parent_id` IS NULL");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getSubCategory($id)
    {
        $query = "SELECT * FROM categories WHERE `parent_id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    public function getAllCategory()
    {
        // $query = $this->db->query("SELECT * FROM `categories` WHERE `parent_id` IS NOT NULL");

        //for User 
        // $query = $this->db->query("SELECT c1.id, c1.name, c2.name AS parent_name, c1.image, c2.status AS parent_status, c1.description, c1.created_at  FROM categories c1 LEFT JOIN categories c2 ON c1.parent_id = c2.id WHERE c1.parent_id IS NOT NULL AND c2.status = 'Active'");

        //For Admin
        $query = $this->db->query("SELECT c1.id, c1.name, c2.name AS parent_name, c1.image, c2.status, c1.description, c1.created_at AS parent_status FROM categories c1 LEFT JOIN categories c2 ON c1.parent_id = c2.id WHERE c1.deleted_at IS NULL");

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getparentCategory($id)
    {

        $query = "WITH RECURSIVE category_path AS (
            SELECT id, name, parent_id, name AS path
            FROM categories
            WHERE id = $id
            UNION ALL
            SELECT c.id, c.name, c.parent_id, CONCAT(cp.path, ', ', c.name)
            FROM categories c
            JOIN category_path cp ON c.id = cp.parent_id
          )
          SELECT path
          FROM category_path";

        $query = $this->db->prepare($query);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        return end($result)->path;
        // return $result;
    }


    public function getCategoryAll()
    {
        $query = $this->db->query("SELECT * FROM categories WHERE `deleted_at` = null");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function updateCategoryById($id, $category_data)
    {

        $query = "UPDATE categories SET
            `name` = :name,
            `parent_id` = :parent_id,
            `status` = :status,
            `image` = :image,
            `description` = :description
            WHERE `id` = :id";

        $query = $this->db->prepare($query);
        $query->bindValue(':name', $category_data['name']);
        $query->bindValue(':parent_id', $category_data['parent_id']);
        $query->bindValue(':status', $category_data['status']);
        $query->bindValue(':image', $category_data['image']);
        $query->bindValue(':description', $category_data['description']);
        $query->bindValue(':id', $id);

        $query->execute();
        
    }


    public function getCategoryById($id)
    {
        $query = "SELECT * FROM categories WHERE `id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }


    public function getCategoryByWhereIn($ids)
    {
        // Prepare placeholders for the IN clause
        $placeholders = implode(',', array_fill(0, count($ids), '?'));

        // Construct the query with the WHERE IN clause
        $query = "SELECT id, name FROM categories WHERE `id` IN ($placeholders)";
        $stmt = $this->db->prepare($query);

        // Bind each ID value to its placeholder
        foreach ($ids as $key => $id) {
            $stmt->bindValue(($key + 1), $id); // BindValue parameter index starts from 1
        }

        // Execute the query
        $stmt->execute();

        // Fetch all rows as objects
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }


    
    public function getRandomCategory()
    {
        
        // $query = $this->db->query("SELECT * FROM categories WHERE `parent_id` IS NULL ORDER BY RAND() LIMIT 5");
       
        // $query = $this->db->query("SELECT c.*
        //     FROM categories c
        //     JOIN product_categories pc ON c.id = pc.category_id
        //     WHERE c.parent_id IS NULL
        //     ORDER BY RAND()
        //     LIMIT 5
        // ");

        $query = $this->db->query("SELECT DISTINCT c.id, c.name
        FROM categories c
        JOIN product_categories pc ON c.id = pc.category_id
        WHERE c.parent_id IS NULL
        ORDER BY RAND()
        LIMIT 5
        ");

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function softDeleteCategory($id)
    {
        // Get the IDs of the categories to be updated
        $query = "SELECT id FROM `categories` WHERE id = :id OR parent_id = :id OR parent_id IN (SELECT id FROM `categories` WHERE parent_id = :id)";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $ids = $stmt->fetchAll(PDO::FETCH_COLUMN);

        // Update the categories
        $query = "UPDATE `categories` SET deleted_at = NOW(), status = 'Inactive' WHERE id IN (" . implode(',', $ids) . ")";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return true;
    }
    

}
