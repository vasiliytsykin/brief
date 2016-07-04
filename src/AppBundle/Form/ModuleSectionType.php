<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ModuleSectionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('news', CheckboxType::class, array(
                'attr' => array(
                    'value' => 'Новости'
                ),
                'label' => 'Новости',
                'required' => false
                ))
            ->add('spam', CheckboxType::class, array(
                'attr' => array(
                    'value' => 'Почтовая рассылка'
                ),
                'label' => 'Почтовая рассылка',
                'required' => false
            ))
            ->add('catalog', CheckboxType::class, array(
                'attr' => array(
                    'value' => 'Каталог'
                ),
                'label' => 'Каталог',
                'required' => false
            ))
            ->add('store', CheckboxType::class, array(
                'attr' => array(
                    'value' => 'Интернет-магазин'
                ),
                'label' => 'Интернет-магазин (службы доставки, системы оплаты, интеграция с агрегаторами)',
                'required' => false
            ))
            ->add('search', CheckboxType::class, array(
                'attr' => array(
                    'value' => 'Поиск'
                ),
                'label' => 'Поиск',
                'required' => false
            ))
            ->add('faq', CheckboxType::class, array(
                'attr' => array(
                    'value' => 'Вопрос-ответ'
                ),
                'label' => 'Вопрос-ответ',
                'required' => false
            ))
            ->add('registration', CheckboxType::class, array(
                'attr' => array(
                    'value' => 'Регистрация посетителей'
                ),
                'label' => 'Регистрация посетителей',
                'required' => false
            ))
            ->add('photo-gallery', CheckboxType::class, array(
                'attr' => array(
                    'value' => 'Фотогалерея'
                ),
                'label' => 'Фотогалерея',
                'required' => false
            ))
            ->add('video-gallery', CheckboxType::class, array(
                'attr' => array(
                    'value' => 'Видео-галерея'
                ),
                'label' => 'Видео-галерея',
                'required' => false
            ))
            ->add('vacancy', CheckboxType::class, array(
                'attr' => array(
                    'value' => 'Вакансии'
                ),
                'label' => 'Вакансии',
                'required' => false
            ))
            ->add('other', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Другие'
                ),
                'required' => false
                ))

        ;
    }
}
