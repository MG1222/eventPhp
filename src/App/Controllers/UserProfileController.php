<?php

namespace App\Controllers;

use Library\Core\AbstractController;
use App\Models\UserManager;
use PDOException;

class UserProfileController extends AbstractController
{
    public function userProfile(): void
    {
        var_dump($_SESSION);
       
        try {
            if (isset($_SESSION['user_id'])) {
                $userManager = new UserManager();
                $user = $userManager->findUserById($_SESSION['user_id']);
                $this->display('userProfile', [
                    'user' => $user
                ]);
            } else {
                header('Location: ' . url('/signUp'));
                exit();
            }

        }

        catch(PDOException $e) {
            $error = 'USM----' . $e->getMessage();
            echo $error;
        }
    
    }
}        