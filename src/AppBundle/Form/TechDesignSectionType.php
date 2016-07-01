<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TechDesignSectionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mobile', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Адаптация под мобильные устройства'
                )))
            ->add('browsers', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Версии браузеров, которые необходимо поддерживать'
                )))
            ->add('resolution', TextType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Основное разрешение экрана'
                )))
            ->add('media', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Наличие медиа-контента в хорошем качестве'
                )))
            ->add('language', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Языковые версии сайта'
                )))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\TechDesignSection'
        ));
    }
}
