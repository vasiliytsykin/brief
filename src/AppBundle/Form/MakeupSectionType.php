<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MakeupSectionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('restriction', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Наличие ограничений по верстке сайта'
                ),
                'required' => false
                ))
            ->add('jsLibrary', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Используемые js-библиотеки и версии (JQuery, Angular JS, Bootstrap)'
                ),
                'required' => false
                ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\MakeupSection'
        ));
    }
}
