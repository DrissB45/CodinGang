<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Vehicule;
use App\Entity\Reservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('car', EntityType::class, [
                'choice_label' => 'marque',
                'class' => Vehicule::class
            ])
            ->add('driver', EntityType::class, [
                'choice_label' => 'lastname',
                'class' => User::class
                ])
            ->add('debut', DateType::class)
            ->add('fin');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}
