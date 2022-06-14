<?php

namespace App\Models;

use Library\Database\Connection;
use Library\Core\AbstractModel;
use Library\Core\AbstractController;
use PDOException;

class CategoryManager extends AbstractModel
{
    public function create(string $categoryName)
    {
        try {
            $this->db->execute("
                INSERT INTO categories (nameCategory)
                VALUES (:nameCategory)", [
                    'nameCategory' => $categoryName
            ]);
        } catch (PDOException $exception) {
            $error = 'Erreur : ' . $exception->getMessage();
            echo $error;
        }
    }
}


