<?php

namespace App\Models;

use PDO;
use Core\Database;


class Option {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getActive() {
        $query = $this->db->query("SELECT * FROM `options` WHERE `name` = 'template'");
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public  function makeActive($theme) {
        $query = $this->db->prepare("UPDATE `options` SET `value` = :theme WHERE `name` = 'template'");
        $query->bindValue(':theme', $theme);
        $query->execute();
        return true;
    }
    
}

