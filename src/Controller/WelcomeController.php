<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'app_welcome')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'currentRoute' => 'app_home',
            'controller_name' => 'WelcomeController',
        ]);
    }
}