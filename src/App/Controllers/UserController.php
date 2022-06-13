<?php

namespace App\Controllers;

use Library\Core\AbstractController;

class UserController extends AbstractController
{
    public function logIn(): void
    {
       $this->display('logIn') ;

    }
}