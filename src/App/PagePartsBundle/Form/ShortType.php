<?php

namespace App\PagePartsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ShortType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('short', 'text', array('attr' => array('placeholder' => 'Short Input 255 Char')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PagePartsBundle\Entity\Short'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_pagepartsbundle_short';
    }
}
