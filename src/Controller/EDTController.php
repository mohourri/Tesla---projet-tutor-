<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EDTController extends AbstractController
{
    #[Route('/e/d/t', name: 'app_e_d_t')]
    public function index(): Response
    {
        return $this->render('edt/index.html.twig', [
            'controller_name' => 'EDTController',
        ]);
    }
}
