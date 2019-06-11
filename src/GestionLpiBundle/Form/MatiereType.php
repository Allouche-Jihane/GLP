<?php

namespace GestionLpiBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatiereType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nomMatiere')
                ->add('description')
                ->add('module', EntityType::class, array(
                        'class' => 'GestionLpiBundle:Module',
                        'choice_label' => 'nomModule',
                    ))
                ->add('compte', EntityType::class, array(
                        'class' => 'GestionLpiBundle:Compte',
                        'choice_label' => 'nom',
                    ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GestionLpiBundle\Entity\Matiere'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'gestionlpibundle_matiere';
    }


}
