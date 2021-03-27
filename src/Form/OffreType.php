<?php

namespace App\Form;

use App\Entity\Offre;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OffreType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('NomEntreprise')
            ->add('Salaire')
            ->add('Description')
            ->add('Localisation')
            ->add('NombreHeure')
            ->add('TypeContrat')
            ->add('NiveauEtude')
            ->add('Experience')
            ->add('Langue')
            ->add('DateExpiration')
            ->add('Tel')
            ->add('Email')
            ->add('NomCategorie')
            ->add('Id_Offre')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Offre::class,
        ]);
    }
}
