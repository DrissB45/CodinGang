<?php

namespace App\Controller;

use App\Entity\Vehicule;
use App\Entity\Reservation;
use App\Form\ReservationType;
use App\Repository\VehiculeRepository;
use App\Repository\ReservationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/vehicule', name: 'vehicule_')]
class VehiculeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(VehiculeRepository $vehiculeRepository): Response
    {
        $vehicules = $vehiculeRepository->findAll();

        return $this->render('vehicule/index.html.twig', [
            'vehicules' => $vehicules,
        ]);
    }

    #[Route('/show/{id}', requirements: ['id' => '\d+'], name: 'show')]
    public function show(Vehicule $vehicule): Response
    {

        return $this->render('vehicule/show.html.twig', [
            'vehicule' => $vehicule,
        ]);
    }

    #[Route('/show/{id}/reservation', name: 'reservation')]
    public function reservation(Request $request, ReservationRepository $reservationRepository): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $reservationRepository->save($reservation, true);

            return $this->redirectToRoute('vehicule_reservation_confirmation', ['id' => $reservation->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('reservation/index.html.twig', [
            'reservation' => $reservation,
            'form' => $form
        ]);
    }

    #[Route('/show/{id}/confirmation', name: 'reservation_confirmation')]
    public function confirmation(ReservationRepository $reservationRepository, int $id): Response
    {
        $reservation = $reservationRepository->findOneBy(['id' => $id]);

        return $this->render('reservation/result.html.twig', [
            'reservation' => $reservation
        ]);
    }
}
