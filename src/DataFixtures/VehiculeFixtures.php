<?php

namespace App\DataFixtures;

use App\Entity;
use App\Entity\Vehicules;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class VehiculeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        for($i = 0; $i<10 ; $i++) {
            $vehicule = new Vehicules;
            $vehicule->setMarque($faker->firstName());
            $vehicule->setVolume($faker->numberBetween(1, 35));
            $vehicule->setCarburant($faker->firstName());
            $vehicule->setImage('Yolo');
            $vehicule->setAnnee($faker->year());
            $vehicule->setEtat('good');
            $manager->persist($vehicule);
        }
        $manager->flush();
    }
}
