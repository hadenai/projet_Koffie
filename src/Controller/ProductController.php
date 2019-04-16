<?php

namespace App\Controller;

use App\Model\CategoryManager;
use App\Model\ProductManager;

class ProductController extends AbstractController
{
    public function index()
    {
        $productManager = new ProductManager();
        $products = $productManager->selectAll();

        $categoryManager = new CategoryManager();
        $categories = $categoryManager->selectAll();


        return $this->twig->render('Products/index.html.twig', [
            'products' => $products,
            'categories' => $categories

            ]);
    }
}
