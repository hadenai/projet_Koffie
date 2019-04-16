<?php


namespace App\Controller;

use App\Model\NavbarManager;

class NavbarController extends AbstractController
{
    public function index()
    {
        $navbarManager = new NavbarManager();
        $navbars = $navbarManager->selectAll();

        return $this->twig->render('/Navbar/index.html.twig', [
            'navbar'=> $navbars
        ]);
    }
}
