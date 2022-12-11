<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseControleController extends AbstractController
{
    #[Route('/classe/controle', name: 'app_classe_controle')]
    public function index(): Response
    {
        return $this->render('classe_controle/index.html.twig', [
            'controller_name' => 'ClasseControleController',
        ]);
    }
}
