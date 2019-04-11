<?php
/**
 * Created by PhpStorm.
 * User: arthur
 * Date: 2019-04-10
 * Time: 14:52
 */

namespace App\Controller;

use App\Model\ArticleManager;

class ArticleController extends AbstractController
{
    public function index()
    {
        $articleManager = new ArticleManager();
        $articles = $articleManager->selectAll();

        return $this->twig->render('/Products/index.html.twig',[
            'articles' => $articles
        ]);
    }
}