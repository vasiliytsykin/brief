<?php

namespace AppBundle\Form\Type;


use AppBundle\Entity\Company;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Ваша компания'
                )
            ))
            ->add('domain', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Сфера деятельности'
                )
            ))
            ->add('geography', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'География деятельности'
                )
            ))
            ->add('products', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Основные характеристики товаров и услуг'
                )
            ))
            ->add('email', EmailType::class, array(
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
            'data_type' => Company::class)
        );
    }
}