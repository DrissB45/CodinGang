<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReservationRepository::class)]
class Reservation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?User $driver = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $datedefin = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    private ?Vehicule $car = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDriver(): ?User
    {
        return $this->driver;
    }

    public function setDriver(?User $driver): self
    {
        $this->driver = $driver;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getDatedefin(): ?\DateTimeInterface
    {
        return $this->datedefin;
    }

    public function setDatedefin(\DateTimeInterface $datedefin): self
    {
        $this->datedefin = $datedefin;

        return $this;
    }

    public function getCar(): ?Vehicule
    {
        return $this->car;
    }

    public function setCar(?Vehicule $car): self
    {
        $this->car = $car;

        return $this;
    }
}
