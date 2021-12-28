<?php

namespace App\Controller;

use App\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
class CourseController extends AbstractController
{
    private $em;
    public function __construct(PersistenceManagerRegistry $registry)
    {
        $this->em = $registry;
    }

    /**
     * @Route("/students", name="student_index")
     */

    public function showStudentIndex(){
        $students = $this->em->getRepository(Student::class)->findAll();
        return $this->render("student/index.html.twig",
        [
            'students' => $students
        ]);
}
}