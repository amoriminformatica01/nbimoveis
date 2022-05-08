<?php

namespace App\Libraries;

class Hash
{
    public static function make($password)
    {
        return password_hash($password, PASSWORD_BCRYPT);
    }

    public static function check($password, $dbPassword)
    {
        if (password_verify($password, $dbPassword)) {
            return true;
        } else {
            return false;
        }
    }
}