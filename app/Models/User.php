<?php

namespace App\Models;

use PDO;
use Core\Database;


class User
{

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function getAllData()
    {
        $query = $this->db->query("SELECT * FROM `users`");
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public  function create($data)
    {

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


    public function updateUser($email, $token)
    {

        // Update the remember_token column to 'Yes' for the specified id and user_id
        $query = "UPDATE users SET remember_token = :token WHERE email = :email LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':token', $token);
        $stmt->execute();
        return true;
    }

    public function checkUser($email)
    {
        $query = "SELECT * FROM users WHERE email = :email LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    public function getUserByid($token, $id)
    {
        $query = "SELECT * FROM users WHERE remember_token = :token AND id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':token', $token);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }


    public function updateUserPwd($email, $pwd)
    {

        // Update the remember_token column to 'Yes' for the specified id and user_id
        $query = "UPDATE users SET password = :pwd, remember_token = NULL WHERE email = :email LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':pwd', $pwd);
        $stmt->execute();
        return true;
    }
}
