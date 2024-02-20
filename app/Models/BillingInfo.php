<?php

namespace App\Models;

use PDO;
use Core\Database;


class BillingInfo {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public  function insertBillingData($data) 
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $query = $this->db->prepare("INSERT INTO biling_information ($columns) VALUES ($values)");

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $success = $query->execute();

        if ($success) {
            // Get the ID of the newly inserted row
            $id = $this->db->lastInsertId();
            
            // Fetch the newly inserted data
            $query = $this->db->prepare("SELECT * FROM biling_information WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();
            
            return $query->fetch(PDO::FETCH_OBJ);
        } else {
            return false; // or throw an exception
        }
    }
 
}

