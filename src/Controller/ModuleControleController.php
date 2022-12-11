<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ModuleControleController extends AbstractController
{
    #[Route('/module/controle', name: 'app_module_controle')]
    public function index(): Response
    {
        return $this->render('module_controle/index.html.twig', [
            'controller_name' => 'ModuleControleController',
        ]);
    }
}
