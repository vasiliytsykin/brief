<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CodeSectionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('server', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'HTTP-сервер и его версия (Apache, IIS)'
                )))
            ->add('programmingLang', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Серверный язык и его версия (PHP, C#, Python)'
                )))
            ->add('dataBase', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'База данных (MySQL, SQLite, Oracle, MS Server)'
                )))
            ->add('serverConfig', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Технические ограничения сервера (библиотеки, конфигурация, нагрузочные характеристики)'
                )))
            ->add('encoding', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'Кодировка сервера (windows-1251, utf-8)'
                )))
            ->add('cms', TextareaType::class, array(
                'attr' => array(
                    'class' => 'form-control',
                    'placeholder' => 'CMS (система управления сайтом) / фреймворк и версия (WordPress, Bitrix, Kohana, Symfony, TWIG, Joomla)'
                )))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CodeSection'
        ));
    }
}
