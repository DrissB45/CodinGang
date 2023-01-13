<?php

namespace App\Service;

use App\Entity\Vehicule;
use Doctrine\ORM\EntityManagerInterface;

class CalculateCarbone
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    public function calculate(Vehicule $vehicule): int 
    {
        $vehicules = $this->em->getRepository(Vehicule::class)->findAll(); // j'utilise doctrine pour récuperer tous mes véhicule via findAll()
        $carbonneTotal = 0;
        foreach ($vehicules as $vehicule) { //ensuite je parcours tous mes véhicules pour les additionner
            $carbonneTotal += $vehicule->getCarbonne();
        }
        return $carbonneTotal;
    }

    public function calculateByKm(Vehicule $vehicule): float
    {
        $vehicule = $this->em->getRepository(Vehicule::class)->findOneBy(['id' => $vehicule->getId()]);
        $carbonneBykm = 0;
        if ($vehicule->getKilometrage() > 0) {
            $carbonneBykm = $vehicule->getCarbonne() / $vehicule->getKilometrage();
        } else {
            $carbonneBykm = 0;
        }
        return round($carbonneBykm);
    }
}
