<?php

namespace App\Models;

use PDO;
use Core\Database;


class City {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getCitiesByStateId($stateId) {
        $query = $this->db->prepare("SELECT * FROM `cities` WHERE `state_id` = :stateId");
        $query->bindParam(':stateId', $stateId);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}

