<?php

namespace App\Controllers;

use Library\Core\AbstractController;

class UserController extends AbstractController
{
    public function logIn()
    {
        $this->display('logIn') ;

    }
}