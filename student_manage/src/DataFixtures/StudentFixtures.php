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

        for ($i=1; $i<=10; $i++){
            $student = new Student;
            $student->setCode("GCH000$i");
            $student->setName("Student $i");
            $student->setAge("12");
            $student->setGender("Male");
            $manager->persist($student);

        }

        $manager->flush();
    }
}
