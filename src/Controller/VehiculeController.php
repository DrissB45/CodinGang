<?php

namespace App\Controller;

use App\Repository\VehiculesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/vehicule', name: 'vehicule_')]
class VehiculeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(VehiculesRepository $vehiculesRepository): Response
    {
        $vehicules = $vehiculesRepository->findAll();

        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }
}
