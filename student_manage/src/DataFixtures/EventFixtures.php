<?php

namespace App\DataFixtures;

use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use function Symfony\Component\String\s;

class EventFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        
        $event = new Event;
        $event->setDescription(" This event is for new student!");
        $event->setDuration(12);    
        $manager->persist($event);

        
        $manager->flush();
    }
}
