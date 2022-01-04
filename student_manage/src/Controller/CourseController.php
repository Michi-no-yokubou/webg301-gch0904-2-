<?php

namespace App\Controller;
use App\Form\CourseType;
use App\Entity\Course;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
class CourseController extends AbstractController
{

    private $em;
    public function __construct(PersistenceManagerRegistry $registry)
    {
        $this->em = $registry;
    }

    #[Route('/course/add', name : 'course_add')]
    public function courseAdd (Request $request) {
        $course = new course();
        $form = $this->createForm(courseType::class,$course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->em->getManager();
            $manager->persist($course);
            $manager->flush();

            $this->addFlash("Success", "Add course succeed");
            return $this->redirectToRoute("course");
        }

        return $this->renderForm("course/add.html.twig",
        [
            'courseForm' => $form
        ]);
    }
    #[Route('/course', name: 'course')]
    public function courseIndex(): Response
    {
        $courses = $this->em->getRepository(Course::class)->findAll();
        return $this->render('course/index.html.twig', 
        [
            'courses' => $courses
        ]);
    }
    #[Route('/course/detail/{id}', name : 'course_detail')]
    public function courseDetail ($id) {
        $courses = $this->em->getRepository(Course::class)->find($id);
        if ($courses == null) {
            $this->addFlash("Error", "course not existed");
            return $this->redirectToRoute("course");
        } 
        return $this->render("course/detail.html.twig",
        [
            'courses' => $courses
        ]);
    }

    #[Route('/course/edit/{id}', name : 'course_edit')]
    public function courseEdit (Request $request, $id) {
        $course = $this->em->getRepository(Course::class)->find($id);
        $form = $this->createForm(courseType::class,$course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->em->getManager();
            $manager->persist($course);
            $manager->flush();

            $this->addFlash("Success", "Edit course succeed");
            return $this->redirectToRoute("course");
        }

        return $this->renderForm("course/edit.html.twig",
        [
            'courseForm' => $form
        ]);
    }

    #[Route('/course/delete/{id}', name : 'course_delete')]
    public function courseDelete ($id) {
        $course = $this->em->getRepository(course::class)->find($id);
        if ($course == null) {
            $this->addFlash("Error", "course delete failed");
        } else {
            $manager = $this->em->getManager();
            $manager->remove($course);
            $manager->flush();
            $this->addFlash("Zuccess", "course delete succeed");
        }
        return $this->redirectToRoute('course');
    }
}