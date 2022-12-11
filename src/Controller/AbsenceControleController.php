<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AbsenceControleController extends AbstractController
{
    #[Route('/absence/controle', name: 'app_absence_controle')]
    public function index(): Response
    {
        return $this->render('absence_controle/index.html.twig', [
            'controller_name' => 'AbsenceControleController',
        ]);
    }
}
