<?php

namespace App\Controller;

use App\Entity\Course;
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
     * @Route("/courses", name="course_index")
     */

    public function showCourseIndex(){
        $courses = $this->em->getRepository(Course::class)->findAll();
        return $this->render("courses/index.html.twig",
        [
            'courses' => $courses
        ]);
}
}