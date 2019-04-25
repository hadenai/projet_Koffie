<?php


namespace App\Controller;

class CardController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Home/card.html.twig');
    }
}
