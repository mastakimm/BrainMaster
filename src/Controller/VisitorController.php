<?php

namespace App\Controller;

use App\Repository\VisitorsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class VisitorController extends AbstractController
{
    public function countVisitors(VisitorsRepository $visitorRepository): Response
    {
        $uniqueVisitors = $visitorRepository->count([]);
        return new Response('Unique visitors: '.$uniqueVisitors);
    }


    #[Route('/visitor', name: 'app_visitor')]
    public function index(): Response
    {
        return $this->render('visitor/index.html.twig', [
            'controller_name' => 'VisitorController',
        ]);
    }
}
