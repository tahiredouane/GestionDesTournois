<?php

namespace GT\GestionTournoisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TournoisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule')
            ->add('dtDebut')
            ->add('dtFin')
            ->add('categorie')
            ->add('systeme')
            ->add('nbrEquipe')
            ->add('responsable')
            ->add('etat')
            ->add('winner')
            ->add('meilleurJoueur')
            ->add('meilleurGardienne')
            ->add('buteur')
            ->add('commentaire')
            ->add('str1')
            ->add('str2')
            ->add('int1')
            ->add('int2')
            ->add('dtCreation')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GT\GestionTournoisBundle\Entity\Tournois'
        ));
    }

    public function getName()
    {
        return 'gt_gestiontournoisbundle_tournoistype';
    }
}
