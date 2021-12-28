<?php

namespace App\DataFixtures;

use App\Entity\TuitionFee;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TuitionFeeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        $tuitionfee = new TuitionFee;
        $tuitionfee->setAmount(100.00);
        $tuitionfee->setDuration("10 days");
        $manager->persist($tuitionfee);
        $manager->flush();
    }
}
