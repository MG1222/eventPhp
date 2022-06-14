<?php 

namespace App\Models;

use Library\Core\AbstractModel;
use App\Models\User;
use PDOException;


class UserManager extends AbstractModel
{
   public function createUser(User $user): User
   {
        try {
            $id = $this->db->execute('INSERT INTO users (fullName, email, password, pseudo) VALUES (:fullName, :email, :password, :pseudo)', [
                'fullName' => $user->getFullName(),
                'email' => $user->getEmail(),
                'password' => $user->getPassword(),
                'pseudo' => $user->getPseudo(),
            ]);

            $user->setId($id);

        } catch(PDOException $e) {
            $error = 'USM----' . $e->getMessage();
            echo $error;
        }

        return $user;
    }

    public function findUserById(int $id) : User {
        $data = $this->db->getResults('SELECT * FROM users WHERE id = :id', [
            'id' => $id
        ]);

        $user = new User();
        $user->setId($data[0]['id']);
        $user->setEmail($data[0]['email']);
        $userData = $user->setFullName($data[0]['fullname']);

      
        
        return $user;
    }
   



}