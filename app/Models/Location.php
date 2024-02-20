<?php

namespace App\Models;

use PDO;
use Core\Database;


class Location {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getLocationData($id) {
        $query = $this->db->prepare("SELECT locations.*, country.name AS country_name, states.name AS state_name, cities.name AS city_name FROM `locations` LEFT JOIN `country` ON locations.country = country.id LEFT JOIN `states` ON locations.state_id = states.id LEFT JOIN `cities` ON locations.city_id = cities.id WHERE user_id = :id");
        // $query = $this->db->prepare("SELECT locations.*, country.name AS country_name, states.name AS state_name, cities.name AS city_name FROM `locations` RIGHT JOIN `country` ON locations.country = country.id RIGHT JOIN `states` ON locations.state_id = states.id RIGHT JOIN `cities` ON locations.city_id = cities.id WHERE user_id = :id");
        // $query = $this->db->prepare("SELECT locations.*, country.name AS country_name, states.name AS state_name, cities.name AS city_name FROM `locations` INNER JOIN `country` ON locations.country = country.id INNER JOIN `states` ON locations.state_id = states.id INNER JOIN `cities` ON locations.city_id = cities.id WHERE user_id = :id");
        $query->bindParam(':id', $id, PDO::PARAM_STR);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public  function inserUserLocation($data) 
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $query = $this->db->prepare("INSERT INTO locations ($columns) VALUES ($values)");

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $success = $query->execute();

        if ($success) {
            // Get the ID of the newly inserted row
            $id = $this->db->lastInsertId();
            
            // Fetch the newly inserted data
            $query = $this->db->prepare("SELECT * FROM locations WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();
            
            return $query->fetch(PDO::FETCH_OBJ);
        } else {
            return false; // or throw an exception
        }
    }

    public function updateLocation($id, $user_id){
        // Update the has_default column to 'No' for all records with user_id
        $query = "UPDATE locations SET has_default = 'No' WHERE user_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $user_id);
        $stmt->execute();

        // Update the has_default column to 'Yes' for the specified id and user_id
        $query = "UPDATE locations SET has_default = 'Yes' WHERE id = :id AND user_id = :user_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':user_id', $user_id);
        $stmt->execute();
        return true;
    }

    public function deleteLocation($id, $user_id)
    {
        $query = "DELETE FROM locations WHERE id = :id AND user_id = :user_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->bindValue(':user_id', $user_id);
        $stmt->execute();
        return true;
    }

    public function chekHasdefault($user_id)
    {
        $query = "SELECT * FROM locations WHERE user_id = :user_id LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':user_id', $user_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
    
    
}

