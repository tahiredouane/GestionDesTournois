<?php

namespace GT\GestionTournoisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TypeCarteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('intitule')
            ->add('tableName')
            ->add('str1')
            ->add('str2')
            ->add('str3')
            ->add('int1')
            ->add('int2')
            ->add('int3')
            ->add('dtCreation')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GT\GestionTournoisBundle\Entity\TypeCarte'
        ));
    }

    public function getName()
    {
        return 'gt_gestiontournoisbundle_typecartetype';
    }
}
