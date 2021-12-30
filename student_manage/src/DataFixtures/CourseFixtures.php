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
        $course->setDescription("WEB201");
        $course->setDuration("1 Day");
        $manager->persist($course);
        $manager->flush();
    }
}
