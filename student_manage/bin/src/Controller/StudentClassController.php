<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentClassController extends AbstractController
{
    #[Route('/student/class', name: 'student_class')]
    public function index(): Response
    {
        return $this->render('student_class/index.html.twig', [
            'controller_name' => 'StudentClassController',
        ]);
    }
}
