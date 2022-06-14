<?php

namespace App\Models;

use Library\Database\Connection;
use Library\Core\AbstractModel;
use PDOException;

class CategoryManager extends AbstractModel
{
    public function create(string $categoryName)
    {
        try {
            return $this->pdo->execute("
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


