<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PoemaController extends AbstractController
{
    #[Route('/', name: 'app_poema')]
    public function index(): Response
    {
        return $this->render('/layout.html.twig', [
            'controller_name' => 'PoemaController',
        ]);
    }
}
