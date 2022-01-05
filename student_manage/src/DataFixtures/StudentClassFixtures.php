<?php

namespace App\DataFixtures;

use App\Entity\StudentClass;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class StudentClassFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $studentclass = new StudentClass;
        $studentclass->setCourse(" khoa hoc cho F2G");
        $studentclass->setName(" GCH0904");
        $manager->persist($studentclass);
        $manager->flush();
    }
}
