<?php

namespace App\Controllers;

use Library\Core\AbstractController;
use App\Models\User;
use App\Models\UserManager;
use PDOException;

class UserController extends AbstractController
{
    public function logIn(): void
    {
       $this->display('logIn') ;
       try{
           if(isset($_POST['fullName']) && isset($_POST['email']) && isset($_POST['password']) === isset($_POST['passwordConfirmation']) && isset($_POST['pseudo'])) {

           $user = new User();
           $user->setFullName($_POST['fullName']);
           $user->setEmail($_POST['email']);
           $user->setPassword(password_hash($_POST['password'], PASSWORD_ARGON2ID));
           $user->setPasswordConfirmation($_POST['passwordConfirmation']);
            $user->setPseudo($_POST['pseudo']);
           
            if($user->isValid()) {
                $userManager = new UserManager();
                $userManager->createUser($user);
                echo ' UC -- done';

            } 
       }
         } catch(PDOException $e) {
              $error = 'UC-----' . $e->getMessage();
              echo $error;
       }



    }
}