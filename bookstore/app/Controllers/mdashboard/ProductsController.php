<?php

namespace App\Controllers\Mdashboard;

use App\Controllers\BaseController;

class ProductsController extends BaseController
{
    public function index()
    {
        // Load the model
    // Load the model
    $productModel = new \App\Models\ProductModel();
    $keyword = $this->request->getVar('keyword');

    if ($keyword) {
        $products = $productModel->search($keyword)->findAll();
    } else {
        $products = $productModel->getProducts();
    }

    // Load the view and pass data to it
    return view('mdashboard/home', ['products' => $products]);
    }
}
