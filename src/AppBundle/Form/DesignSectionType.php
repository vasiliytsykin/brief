<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DesignSectionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('style', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Какие стилевые решения вы считаете наиболее подходящими для вашего сайта, и укажите референсы'
                )))
            ->add('impression', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Какое впечатление должен производить сайт на посетителя'
                )))
            ->add('antiFeatures', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Что бы вы категорически не хотели видеть в дизайне вашего сайта'
                ),
                'required' => false
                ))
            ->add('antiAssociations', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Какие ассоциации не должен вызывать сайт'
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
            'data_class' => 'AppBundle\Entity\DesignSection'
        ));
    }
}
