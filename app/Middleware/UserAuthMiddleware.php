<?php

namespace App\Middleware;

use Core\Middleware;

class UserAuthMiddleware extends Middleware {

    public function index() {
        // echo "middlewre working"; exit;

        if(isset($_SESSION['user_id'])){

        }else{
            $url = url('/');
            header('location: '.$url);
            exit();
        }

    }

}
