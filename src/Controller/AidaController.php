<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AidaController extends AbstractController
{
    // Route pour l'index
    #[Route('/aida', name: 'app_aida_index')]
    public function index(): Response
    {
        return $this->render('aida/index.html.twig', [
            'controller_name' => 'AidaController',
        ]);
    }

    // Route pour le CV
    #[Route('/aida/cv', name: 'app_aida_cv')]
    public function cv(): Response
    {
        return $this->render('aida/cv.html.twig', [
            'controller_name' => 'AidaController',
        ]);
    }

    #[Route('/aida/accueil', name: 'acueil')]
    public function accueil(): Response
    {
        return $this->render('aida/accueil.html.twig', [
            'controller_name' => 'AidaController',
        ]);
    }
    #[Route('/aida/avis', name: 'avis')]
    public function avis(): Response
    {
        return $this->render('aida/avis.html.twig', [
            'controller_name' => 'AidaController',
        ]);
    }
    #[Route('/aida/portfolio', name: 'portfolio')]
    public function portfolio(): Response
    {
        return $this->render('aida/portfolio.html.twig', [
            'controller_name' => 'AidaController',
        ]);
    }
}
