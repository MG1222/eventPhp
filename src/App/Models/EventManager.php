<?php


namespace App\Models;

use Library\Core\AbstractModel;

class ProductsManager extends AbstractModel
{

    public function getProducts(): array
    {

        return $this->db->getResults('SELECT * FROM products');

    }
}