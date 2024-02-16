<?php

namespace App\Middleware;

use Core\Middleware;

class AuthMiddleware extends Middleware {

    public function index() {
        // echo "middlewre working"; exit;

        if(isset($_SESSION['Auth_Admin'])){

        }else{
            $url = url('/dw-admin');
            header('location: '.$url);
            exit();
        }

    }

}
