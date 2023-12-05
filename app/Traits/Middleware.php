<?php

namespace App\Traits;

trait Middleware
{
    private static function checkLogin()
    {
        if (!$_SESSION['admin']) redirect('/login');
    }
}