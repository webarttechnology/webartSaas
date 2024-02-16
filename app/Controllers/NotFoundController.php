<?php

namespace App\Controllers;

class NotFoundController {

    public function show404() {
        // Include the 404 view file
        include_once "../app/views/404.php";
    }
    
}