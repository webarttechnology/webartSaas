<?php

namespace App\Models;

use PDO;
use Core\Database;


class Coupon {

    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getCoupon() {
        $query = $this->db->prepare("SELECT * FROM `coupons`");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public  function insertCoupon($data)
    {
        $columns = implode(', ', array_keys($data));
        $values = ':' . implode(', :', array_keys($data));

        $query = $this->db->prepare("INSERT INTO `coupons` ($columns) VALUES ($values)");

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $success = $query->execute();

        if ($success) {
            // Get the ID of the newly inserted row
            $id = $this->db->lastInsertId();

            // Fetch the newly inserted data
            $query = $this->db->prepare("SELECT * FROM `coupons` WHERE id = :id");
            $query->bindValue(':id', $id);
            $query->execute();

            return $query->fetch(PDO::FETCH_OBJ);
        } else {
            return false; // or throw an exception
        }
    }


    
    public function getCouponById($id)
    {
        $query = "SELECT * FROM `coupons` WHERE `id` = :id";
        $query = $this->db->prepare($query);
        $query->bindValue(':id', $id);
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }


    public function getCouponByName($name)
    {
        $query = "SELECT * FROM `coupons` WHERE `status` = 'Active' AND `coupon_name` = :couponname";
        $query = $this->db->prepare($query);
        $query->bindValue(':couponname', $name);
        $query->execute();
        $coupon = $query->fetch(PDO::FETCH_OBJ);
    
        // Check if coupon is found and not expired
        if ($coupon && strtotime($coupon->end_date) >= time()) {
            return $coupon;
        }
    
        return null; // Coupon not found or expired
    }
    

   


    public  function updateCoupon($id, $data)
    {
        
        $setValues = '';

        foreach ($data as $key => $value) {
            $setValues .= "$key=:$key, ";
        }

        $setValues = rtrim($setValues, ', ');

        $query = $this->db->prepare("UPDATE `coupons` SET $setValues WHERE id = :id");

        $query->bindValue(':id', $id);

        foreach ($data as $key => $value) {
            $query->bindValue(":$key", $value);
        }

        $query->execute();
        return true;
    }

  

    public function deleteCoupon($id)
    {
        $query = "DELETE FROM `coupons` WHERE id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return true;
    }

}

