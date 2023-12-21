<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/navire', name: 'navire_')]
class NavireController extends AbstractController
{
    
    public function index(): Response
    {
        return $this->render('navire/index.html.twig', [
            'controller_name' => 'NavireController',
        ]);
    }
}
