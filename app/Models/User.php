<?php

namespace App\Models;

use PDO;
use Core\Database;


class User {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAllData() {
        $query = $this->db->query("SELECT * FROM `users`");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public  function create($data) {

        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $query = $this->db->prepare("INSERT INTO users ($columns) VALUES ($values)");

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $success = $query->execute();

        if ($success) {
            // Get the ID of the newly inserted row
            $id = $this->db->lastInsertId();
            
            // Fetch the newly inserted data
            $query = $this->db->prepare("SELECT * FROM users WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();
            
            return $query->fetch(PDO::FETCH_OBJ);
            
        } else {
            return false; // or throw an exception
        }
    }
    
}

