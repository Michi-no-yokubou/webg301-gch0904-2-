<?php

namespace App\Controller;
use App\Form\TeacherType;
use App\Entity\Teacher;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry as PersistenceManagerRegistry;
class TeacherController extends AbstractController
{
    private $em;
    public function __construct(PersistenceManagerRegistry $registry)
    {
        $this->em = $registry;
    }
    #[Route('/teacher/add', name : 'teacher_add')]
    public function teacherAdd (Request $request) {
        $teacher = new teacher();
        $form = $this->createForm(teacherType::class,$teacher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->em->getManager();
            $manager->persist($teacher);
            $manager->flush();

            $this->addFlash("Success", "Add teacher succeed");
            return $this->redirectToRoute("teacher");
        }

        return $this->renderForm("teacher/add.html.twig",
        [
            'teacherForm' => $form
        ]);
    }
    #[Route('/teacher', name: 'teacher')]
    public function teacherIndex(): Response
    {
        $teachers = $this->em->getRepository(Teacher::class)->findAll();
        return $this->render('teacher/index.html.twig', 
        [
            'teachers' => $teachers
        ]);
    }

    #[Route('/teacher/detail/{id}', name : 'teacher_detail')]
    public function teacherDetail ($id) {
        $teachers = $this->em->getRepository(Teacher::class)->find($id);
        if ($teachers == null) {
            $this->addFlash("Error", "teacher not existed");
            return $this->redirectToRoute("teacher");
        } 
        return $this->render("teacher/detail.html.twig",
        [
            'teachers' => $teachers
        ]);
    }

    #[Route('/teacher/edit/{id}', name : 'teacher_edit')]
    public function teacherEdit (Request $request, $id) {
        $teacher = $this->em->getRepository(Teacher::class)->find($id);
        $form = $this->createForm(teacherType::class,$teacher);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->em->getManager();
            $manager->persist($teacher);
            $manager->flush();

            $this->addFlash("Success", "Edit teacher succeed");
            return $this->redirectToRoute("teacher");
        }

        return $this->renderForm("teacher/edit.html.twig",
        [
            'teacherForm' => $form
        ]);
    }

    #[Route('/teacher/delete/{id}', name : 'teacher_delete')]
    public function teacherDelete ($id) {
        $teacher = $this->em->getRepository(teacher::class)->find($id);
        if ($teacher == null) {
            $this->addFlash("Error", "teacher delete failed");
        } else {
            $manager = $this->em->getManager();
            $manager->remove($teacher);
            $manager->flush();
            $this->addFlash("Zuccess", "teacher delete succeed");
        }
        return $this->redirectToRoute('teacher');
    }
}