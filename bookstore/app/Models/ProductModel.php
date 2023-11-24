<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'product'; // Your product table name

    public function search($keyword){
        return $this->table('product')->like('product_name', $keyword);
    }

    public function getProducts()
    {
        // Fetch all products from the database
        return $this->findAll();
    }
}
