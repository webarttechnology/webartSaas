<?php

namespace Core;

class Hash{


    public static function make($password){
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        return $hashed_password;
    }


}

