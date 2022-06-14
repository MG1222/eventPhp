<?php

namespace App\Controllers;

use Library\Core\AbstractController;
use App\Models\User;
use App\Models\UserManager;
use PDOException;

class UserController extends AbstractController
{
    public function signUp(): void
    {
       $this->display('signUp');

        /*  var_dump(isset($_POST['fullName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordConfirmation']), $_POST); */

       try{
           if(isset($_POST['fullName']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordConfirmation'])) {
             if(isset($_POST['password']) === isset($_POST['passwordConfirmation']))  {
                $user = new User();
                $user->setFullName($_POST['fullName']);
                $user->setEmail($_POST['email']);
                $user->setPassword(password_hash($_POST['password'], PASSWORD_ARGON2ID));
                $user->setPasswordConfirmation($_POST['passwordConfirmation']);
             }
 

            $errors = $user->getErrors();
           
            if(! empty($errors)) {
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