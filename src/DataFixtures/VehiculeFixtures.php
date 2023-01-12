<?php

namespace App\DataFixtures;

use App\Entity;
use App\Entity\Vehicule;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class VehiculeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for($i = 0; $i<10 ; $i++) {
            $vehicule = new Vehicule;
            $vehicule->setMarque($faker->firstName());
            $vehicule->setVolume($faker->numberBetween(1, 35));
            $vehicule->setCarburant($faker->firstName());
            $vehicule->setImage('Yolo');
            $vehicule->setAnnee($faker->year());
            $vehicule->setEtat('good');
            $vehicule->setKilometrage($faker->numberBetween(200, 10000));
            $vehicule->setIsReserved(false);
            $manager->persist($vehicule);
        }
        $manager->flush();
    }
}
