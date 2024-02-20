<?php

namespace App\Models;

use PDO;
use Core\Database;


class Country {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getCountryType() {
        $query = $this->db->query("SELECT * FROM `country`");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}

