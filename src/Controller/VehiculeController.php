<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Repository\VehiculeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/vehicule', name: 'vehicule_')]
class VehiculeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(VehiculeRepository $vehiculeRepository): Response
    {
        $vehicule = $vehiculeRepository->findAll();

        return $this->render('vehicule/index.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

    #[Route('/show/{id}', requirements: ['id' => '\d+'], name: 'show')]
    public function show(Vehicule $vehicule): Response
    {

        return $this->render('vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }
}
