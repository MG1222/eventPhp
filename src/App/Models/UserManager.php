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
        $query = $this->db->execute('INSERT INTO users (fullName, email, password, pseudo) VALUES (:fullName, :email, :password, :pseudo)', [
            'fullName' => $user->getFullName(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'pseudo' => $user->getPseudo(),
        ]);

    } catch(PDOException $e) {
        $error = 'USM----' . $e->getMessage();
        echo $error;
    }

    return $user;
}
   



}