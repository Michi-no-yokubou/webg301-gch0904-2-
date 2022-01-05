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
        $course->setDescription("This is IT class");
        $course->setDuration("1 Day");
        $course->setName("WEB201");
        $manager->persist($course);
        $manager->flush();
    }
}