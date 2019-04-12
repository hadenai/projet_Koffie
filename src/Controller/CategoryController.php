<?php


namespace App\Controller;

use App\Model\CategoryManager;

class CategoryController extends AbstractController
{
    public function index()
    {
        $categoryManager = new CategoryManager();
        $categories = $categoryManager->selectAll();

        return $this->twig->render('/Category/category.html.twig', [
            'categories' => $categories

        ]);
    }
}
