<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{


    public function load(ObjectManager $manager): void
    {
        //tạo tài khoản với role USER
        $user = new User();
        $user->setUsername("user");
        $user->setPassword("123");
        $user->setRoles(['ROLE_USER']);
        $manager->persist($user);

        //tạo tài khoản với role ADMIN
        $user = new User();
        $user->setUsername("admin");
        $user->setPassword("123");
        $user->setRoles(['ROLE_ADMIN']);
        $manager->persist($user);

        $manager->flush();
    }
}