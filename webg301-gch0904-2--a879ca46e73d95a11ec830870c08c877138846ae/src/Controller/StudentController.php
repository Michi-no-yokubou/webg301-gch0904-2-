<?php

namespace App\Controller;

use App\Entity\Student;
use App\Entity\StudentClass;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    /**
     * @Route("/students", name="student_index")
     */
    public function showStudentList(){
        $students = $this->getDoctrine()->getRepository(Student::class)->findALL();
    }
}
