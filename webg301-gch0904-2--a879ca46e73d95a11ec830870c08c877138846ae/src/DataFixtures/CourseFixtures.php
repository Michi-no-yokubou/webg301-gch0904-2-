<?php

namespace App\DataFixtures;

use App\Entity\Course;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CourseFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $course = new Course;
        $course->setDescription(" This class is for F2G");
        $course->setDuration(12);
        
        $manager->persist($course);
        $manager->flush();
    }
}
