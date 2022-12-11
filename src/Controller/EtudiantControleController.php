<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantControleController extends AbstractController
{
    #[Route('/etudiant/controle', name: 'app_etudiant_controle')]
    public function index(): Response
    {
        return $this->render('etudiant_controle/index.html.twig', [
            'controller_name' => 'EtudiantControleController',
        ]);
    }
}
