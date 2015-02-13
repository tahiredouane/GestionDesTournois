<?php

namespace GT\GestionTournoisBundle\Form;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EquipesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('association')
            ->add('adresse')
            ->add('coach')
            ->add('cin')
            ->add('photo')
            ->add('photoEquipe')
            ->add('logo')
            ->add('lienPhoto')
            ->add('lienPhotoEquipe')
            ->add('lienLogo')
            ->add('orders')
            ->add('str1')
            ->add('str2')
            ->add('str3')
            ->add('int1')
            ->add('int2')
            ->add('dtCreation')
            ->add('tournoi')
        //   ->add('groupe')
          
           
->add('groupe', 'entity', array(
    'class' => 'GTGestionTournoisBundle:TableReference',
    'query_builder' => function(EntityRepository $er) {
        return $er->createQueryBuilder('u')
            ->where("u.tableName = 'GROUPE'")
            ;
    },
))
   
 ;      
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GT\GestionTournoisBundle\Entity\Equipes'
        ));
    }

    public function getName()
    {
        return 'gt_gestiontournoisbundle_equipestype';
    }
}
