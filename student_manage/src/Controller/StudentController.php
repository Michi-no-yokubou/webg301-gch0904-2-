<?php

namespace App\Controller;

use App\Entity\Student;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
class StudentController extends AbstractController
{

    private $em;
    public function __construct(PersistenceManagerRegistry $registry)
    {
        $this->em = $registry;
    }

    #[Route('/student', name: 'student')]
    public function index(): Response
    {
        $students = $this->em->getRepository(student::class)->findAll();
        return $this->render('student/index.html.twig', 
        [
            'students' => $students
        ]);
    }

    #[Route('/student/detail/{id}', name : 'student_detail')]
    public function studentDetail ($id) {
        $students = $this->em->getRepository(student::class)->find($id);
        if ($students == null) {
            $this->addFlash("Error", "student not existed");
            return $this->redirectToRoute("student");
        } 
        return $this->render("student/detail.html.twig",
        [
            'students' => $students
        ]);
    }

    #[Route('/student/edit/{id}', name : 'student_edit')]
    public function studentEdit (Request $request, $id) {
        $student = $this->em->getRepository(student::class)->find($id);
        $form = $this->createForm(studentType::class,$student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->em->getManager();
            $manager->persist($student);
            $manager->flush();

            $this->addFlash("Success", "Edit student succeed");
            return $this->redirectToRoute("student_index");
        }

        return $this->renderForm("student/edit.html.twig",
        [
            'studentForm' => $form
        ]);
    }

    #[Route('/student/delete/{id}', name : 'student_delete')]
    public function studentDelete ($id) {
        $student = $this->em->getRepository(student::class)->find($id);
        if ($student == null) {
            $this->addFlash("Error", "student delete failed");
        } else {
            $manager = $this->em->getManager();
            $manager->remove($student);
            $manager->flush();
            $this->addFlash("Zuccess", "student delete succeed");
        }
        return $this->redirectToRoute('student_index');
    }
}
