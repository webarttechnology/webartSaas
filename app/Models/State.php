<?php

namespace App\Models;

use PDO;
use Core\Database;


class State {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getStatesByCountryId($countryId) {
        $query = $this->db->prepare("SELECT * FROM `states` WHERE `country_id` = :countryId");
        $query->bindParam(':countryId', $countryId);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}

