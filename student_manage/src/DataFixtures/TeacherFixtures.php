<?php

namespace App\DataFixtures;

use App\Entity\Teacher;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TeacherFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($i=1; $i<=10; $i++){
            $teacher = new Teacher;
            $teacher->setAvatar("avatar.png");
            $teacher->setCode("T0$i");
            $teacher->setName("Teacher $i");
            $teacher->setAge("30");
            $teacher->setGender("Male");
            $manager->persist($teacher);

        }
        $manager->flush();
    }
}
