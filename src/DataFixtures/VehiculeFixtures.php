<?php

namespace App\DataFixtures;


use App\Entity\Vehicule;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class VehiculeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

            $vehicule1 = new Vehicule;
            $vehicule1->setMarque('Audi RS4');
            $vehicule1->setVolume(58);
            $vehicule1->setCarburant('Essence');
            $vehicule1->setImage('Yolo');
            $vehicule1->setAnnee(2022);
            $vehicule1->setEtat('Très bon état');
            $vehicule1->setKilometrage($faker->numberBetween(200, 10000));
            $vehicule1->setIsReserved(false);
            $vehicule1->setCarbonne($faker->numberBetween(500, 10000));
            $manager->persist($vehicule1);

            $vehicule2 = new Vehicule;
            $vehicule2->setMarque('BMW Série 1');
            $vehicule2->setVolume(55);
            $vehicule2->setCarburant('Essence');
            $vehicule2->setImage('Yolo');
            $vehicule2->setAnnee(2020);
            $vehicule2->setEtat('Bon état');
            $vehicule2->setKilometrage($faker->numberBetween(200, 10000));
            $vehicule2->setIsReserved(false);
            $vehicule2->setCarbonne($faker->numberBetween(500, 10000));
            $manager->persist($vehicule2);

            $vehicule3 = new Vehicule;
            $vehicule3->setMarque('Volkswagen Golf 5');
            $vehicule3->setVolume(55);
            $vehicule3->setCarburant('Diesel');
            $vehicule3->setImage('Yolo');
            $vehicule3->setAnnee(2012);
            $vehicule3->setEtat('Très bon état');
            $vehicule3->setKilometrage($faker->numberBetween(300, 10000));
            $vehicule3->setIsReserved(false);
            $vehicule3->setCarbonne($faker->numberBetween(500, 10000));
            $manager->persist($vehicule3);

            $vehicule4 = new Vehicule;
            $vehicule4->setMarque('Fiat Multipla');
            $vehicule4->setVolume(45);
            $vehicule4->setCarburant('Diesel');
            $vehicule4->setImage('Yolo');
            $vehicule4->setAnnee(2006);
            $vehicule4->setEtat('Moyen');
            $vehicule4->setKilometrage($faker->numberBetween(100, 10000));
            $vehicule4->setIsReserved(false);
            $vehicule4->setCarbonne($faker->numberBetween(500, 10000));
            $manager->persist($vehicule4);

            $vehicule5 = new Vehicule;
            $vehicule5->setMarque('Kia Rio');
            $vehicule5->setVolume(50);
            $vehicule5->setCarburant('Essence');
            $vehicule5->setImage('Yolo');
            $vehicule5->setAnnee(2015);
            $vehicule5->setEtat('Bon état');
            $vehicule5->setKilometrage($faker->numberBetween(100, 10000));
            $vehicule5->setIsReserved(false);
            $vehicule5->setCarbonne($faker->numberBetween(500, 10000));
            $manager->persist($vehicule5);

            $vehicule6 = new Vehicule;
            $vehicule6->setMarque('Mazda 3');
            $vehicule6->setVolume(60);
            $vehicule6->setCarburant('Essence');
            $vehicule6->setImage('Yolo');
            $vehicule6->setAnnee(2016);
            $vehicule6->setEtat('Très bon état');
            $vehicule6->setKilometrage($faker->numberBetween(100, 10000));
            $vehicule6->setIsReserved(false);
            $vehicule6->setCarbonne($faker->numberBetween(500, 10000));
            $manager->persist($vehicule6);

            $vehicule7 = new Vehicule;
            $vehicule7->setMarque('Renault Clio 2 RS');
            $vehicule7->setVolume(65);
            $vehicule7->setCarburant('Essence');
            $vehicule7->setImage('Yolo');
            $vehicule7->setAnnee(2007);
            $vehicule7->setEtat('Bon état');
            $vehicule7->setKilometrage($faker->numberBetween(100, 10000));
            $vehicule7->setIsReserved(false);
            $vehicule7->setCarbonne($faker->numberBetween(500, 10000));
            $manager->persist($vehicule7);

            $vehicule8 = new Vehicule;
            $vehicule8->setMarque('Audi R8');
            $vehicule8->setVolume(62);
            $vehicule8->setCarburant('Diesel');
            $vehicule8->setImage('Yolo');
            $vehicule8->setAnnee(2018);
            $vehicule8->setEtat('Moyen');
            $vehicule8->setKilometrage($faker->numberBetween(100, 10000));
            $vehicule8->setIsReserved(false);
            $vehicule8->setCarbonne($faker->numberBetween(500, 10000));
            $manager->persist($vehicule8);

            $manager->flush();
        }
    }

