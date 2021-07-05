<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setUsername('baas');
        $admin->setPassword('eindbaas');

        $user = new User();
        $user->setUsername('gebruiker');
        $user->setPassword('welkom01');
        // $product = new Product();
        // $manager->persist($product);


        $manager->flush();
    }
}
