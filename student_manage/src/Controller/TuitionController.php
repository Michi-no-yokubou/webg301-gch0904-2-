<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TuitionController extends AbstractController
{
    #[Route('/tuition', name: 'tuition')]
    public function index(): Response
    {
        return $this->render('tuition/index.html.twig', [
            'controller_name' => 'TuitionController',
        ]);
    }
}
