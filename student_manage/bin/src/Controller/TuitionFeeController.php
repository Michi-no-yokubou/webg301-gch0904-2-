<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TuitionFeeController extends AbstractController
{
    #[Route('/tuition/fee', name: 'tuition_fee')]
    public function index(): Response
    {
        return $this->render('tuition_fee/index.html.twig', [
            'controller_name' => 'TuitionFeeController',
        ]);
    }
}
