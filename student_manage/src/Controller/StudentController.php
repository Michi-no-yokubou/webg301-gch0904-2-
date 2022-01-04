<?php

namespace App\Controller;
use App\Form\StudentType;
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

    #[Route('/student/add', name : 'student_add')]
    public function studentAdd (Request $request) {
        $student = new student();
        $form = $this->createForm(studentType::class,$student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $image = $student->getAvatar();
            //B2: đặt tên mới cho ảnh => đảm bảo mỗi ảnh sẽ có 1 tên duy nhất
            $imgName = uniqid(); //unique id
            //B3: lấy đuôi ảnh (image extension)
            $imgExtension = $image->guessExtension();
            //Note: cần edit code lại trong file Book Entity (Book.php)
            //B4: nối tên mới & đuôi ảnh thành tên hoàn chỉnh để lưu vào DB & thư mục
            $imageName = $imgName . "." . $imgExtension;
            //B5: di chuyển ảnh vào thư mục chỉ định
            try {
              $image->move(
                  $this->getParameter('student_avatar'), $imageName
                  /* Note: cần khai báo đường dẫn thư mục chứa ảnh
                  ở file config/services.yaml */
              );  
            } catch (FileException $e) {
                throwException($e);
            }
            //B6: lưu tên ảnh vào DB
            $student->setAvatar($imageName);
            $manager = $this->em->getManager();
            $manager->persist($student);
            $manager->flush();

            $this->addFlash("Success", "Add student succeed");
            return $this->redirectToRoute("student");
        }

        return $this->renderForm("student/add.html.twig",
        [
            'studentForm' => $form
        ]);
    }
    #[Route('/student', name: 'student')]
    public function studentIndex(): Response
    {
        $students = $this->em->getRepository(Student::class)->findAll();
        return $this->render('student/index.html.twig', 
        [
            'students' => $students
        ]);
    }
    #[Route('/student/detail/{id}', name : 'student_detail')]
    public function studentDetail ($id) {
        $students = $this->em->getRepository(Student::class)->find($id);
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
        $student = $this->em->getRepository(Student::class)->find($id);
        $form = $this->createForm(studentType::class,$student);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->em->getManager();
            $manager->persist($student);
            $manager->flush();

            $this->addFlash("Success", "Edit student succeed");
            return $this->redirectToRoute("student");
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
        return $this->redirectToRoute('student');
    }
}