<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ManagerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('managerName', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'ФИО'
                )
            ))
            ->add('phone', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Номер телефона'
                )
            ))
            ->add('managerEmail', EmailType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Email'
                )
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
                'data_type' => 'AppBundle\Entity\Manager')
        );
    }
}