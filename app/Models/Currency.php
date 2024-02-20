<?php

namespace App\Models;

use PDO;
use Core\Database;


class Currency {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getCurrency() {
        $query = $this->db->query("SELECT * FROM `currency`");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}

