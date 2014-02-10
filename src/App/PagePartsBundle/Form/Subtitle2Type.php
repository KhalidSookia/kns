<?php

namespace App\PagePartsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class Subtitle2Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subtitle2', 'text', array('attr' => array('placeholder' => 'Subtitle type 2')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PagePartsBundle\Entity\Subtitle2'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_pagepartsbundle_subtitle2';
    }
}
