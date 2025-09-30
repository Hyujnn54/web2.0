<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        return $this->render('service/index.html.twig', [
            'name' => $name,
        ]);
    }
    
    #[Route('/go-home', name: 'app_go_home')]
    public function goToIndex(): Response
    {
        return $this->redirectToRoute('app_home');
    }

}

