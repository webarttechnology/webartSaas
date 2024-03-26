<?php

namespace App\Models;

use PDO;
use Core\Database;


class Builder {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getPage($name) {
        $query = $this->db->prepare("SELECT * FROM `pages` WHERE `name` = :name");
        $query->bindParam(':name', $name);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getSection($name) {
        $query = $this->db->prepare("SELECT * FROM `section` WHERE `name` = :name");
        $query->bindParam(':name', $name);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function checkBuilder($theme, $page, $section)
    {
        $query = "SELECT * FROM theme_action WHERE `theme` = :theme AND `page_id` = :page AND `section_id` = :section";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':theme', $theme);
        $stmt->bindValue(':page', $page);
        $stmt->bindValue(':section', $section);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    public  function createBuilder($data)
    {
        $columns = implode(', ', array_map(function($key) {
            return "`$key`";
        }, array_keys($data)));
        $values = ':' . implode(', :', array_keys($data));
        $query = $this->db->prepare("INSERT INTO theme_action ($columns) VALUES ($values)");
        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }
        $query->execute();
        return true; 
    }

    public  function updateBuilder($id, $content, $status)
    {
        $query = $this->db->prepare("UPDATE `theme_action` SET `value` = :content, `status` = :status  WHERE `id` = :id ");
        $query->bindValue(':content', $content);
        $query->bindValue(':status', $status);
        $query->bindValue(':id', $id);
        $query->execute();
        return true;
    }


    public function getEditTheme($theme, $page, $section) {

        $query = $this->db->prepare("SELECT ta.*
        FROM theme_action AS ta
        JOIN pages AS p ON ta.page_id = p.id
        JOIN section AS s ON ta.section_id = s.id
        WHERE ta.theme = :theme AND p.name = :page AND s.name = :section");

        $query->bindParam(':theme', $theme);
        $query->bindParam(':page', $page);
        $query->bindParam(':section', $section);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }

}

