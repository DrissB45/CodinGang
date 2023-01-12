<?php

namespace App\Service;

use App\Repository\VehiculeRepository;
use App\Repository\ReservationRepository;

class CheckReservation
{

    private $reservationRepository;
    private $vehiculeRepository;

    public function __construct(ReservationRepository $reservationRepository, VehiculeRepository $vehiculeRepository)
    {
        $this->reservationRepository = $reservationRepository;
        $this->vehiculeRepository = $vehiculeRepository;
    }

    public function isReserved()
    {
        $reservations = $this->reservationRepository->findAll();
        $vehicule = $this->vehiculeRepository->find();
        
        
        foreach ($reservations as $reservation) {
            $reservedCar = $reservation->getCar()->getId();
            var_dump($reservedCar); exit();
            if ($reservedCar === $vehicule->getId()) {
                return 'Véhicule réservé !';
            }
        }
    }
}
