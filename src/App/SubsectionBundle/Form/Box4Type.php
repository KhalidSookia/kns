<?php

namespace App\SubsectionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use App\PagePartsBundle\Form\TitleType;
use App\PagePartsBundle\Form\TextType;
use App\PagePartsBundle\Form\ShortType;
use App\PagePartsBundle\Form\LinkType;

class Box4Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', new TitleType())
            ->add('text', new TextType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\SubsectionBundle\Entity\Box4'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_subsectionbundle_box4';
    }
}
