<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EventFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $event = new Event;
        $event->setDescription("End Of The World");
        $event->setDuration("2 Days");
        $manager->persist($event);
        $manager->flush();
    }
}
