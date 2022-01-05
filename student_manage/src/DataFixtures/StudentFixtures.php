<?php

namespace App\DataFixtures;

use App\Entity\Student;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StudentFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        
            $student = new Student;
            $student->setPicture("ubersmil.png");
            $student->setCode("GCH0001");
            $student->setName("Student1");
            $student->setAge("12");
            $student->setGender("Male");
            $manager->persist($student);

            $student = new Student;
            $student->setPicture("smiluber.png");
            $student->setCode("GCH0002");
            $student->setName("Student2");
            $student->setAge("12");
            $student->setGender("NotMale");
            $manager->persist($student);

            $student = new Student;
            $student->setPicture("longsmil.png");
            $student->setCode("GCH0003");
            $student->setName("Student3");
            $student->setAge("12");
            $student->setGender("Male");
            $manager->persist($student);

        $manager->flush();
    }
}
