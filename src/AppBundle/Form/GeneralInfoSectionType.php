<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GeneralInfoSectionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('targetName', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Название (предприятия, товара или услуги, для которого разрабатывается сайт)'
                )))
            ->add('targetGroup', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Целевая аудитория'
                )))
            ->add('mainTask', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Задача, которую должен решать сайт'
                )))
            ->add('message', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Какое основное сообщение необходимо довести до сознания потребителя'
                )))
            ->add('keywords', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Семантическое ядро (основные поисковые запросы по которым должен находиться сайт)'
                )))
            ->add('structure', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'rows' => 3,
                    'placeholder' => 'Укажите предполагаемые разделы вашего сайта и прокомментируйте их содержание (с указанием возможных подразделов)'
                )))
            ->add('guideline', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'rows' => '3',
                    'placeholder' => 'Наличие гайдлайна, элементов фирменного стиля (логотип, стилеобразующие элементы), дизайн-макетов'
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
            'data_class' => 'AppBundle\Entity\GeneralInfoSection'
        ));
    }
}
