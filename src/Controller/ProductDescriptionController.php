<?php

namespace App\Controller;

use App\Model\ProductDescriptionManager;

class ProductDescriptionController extends AbstractController
{
    public function index()
    {
        $productDescriptionManager = new ProductDescriptionManager();
        $productDescription = $productDescriptionManager->selectAll();


        return $this->twig->render('ProductDescription/productDescription.html.twig', [
            'productDescription' => $productDescription,

        ]);
    }
}