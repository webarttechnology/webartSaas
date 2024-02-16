<?php

namespace Core;

use PDO;
use Dotenv\Dotenv;

/* The Database class is a PHP class that provides a static method to connect to a MySQL database using
PDO. */
class Database {
    private static $db;

    public static function connect() {
        if (!self::$db) {
           
            // Get database credentials from environment variables
            $dsn = 'mysql:host=' . env('DB_HOST') . ';dbname=' . env('DB_DATABASE') . ';charset=utf8';
            $user = env('DB_USERNAME');
            $password = env('DB_PASSWORD');

            try {
                self::$db = new PDO($dsn, $user, $password);
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
        }

        return self::$db;
    }
}

