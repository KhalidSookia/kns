<?php

namespace App\SubsectionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use App\PagePartsBundle\Form\Subtitle1Type;
use App\PagePartsBundle\Form\Subtitle2Type;
use App\PagePartsBundle\Form\LinkType;
use App\PagePartsBundle\Form\ShortType;
use App\UploadBundle\Form\UploadType;

class Box1Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('subtitle1', new Subtitle1Type())
            ->add('subtitle2', new Subtitle2Type())
            ->add('short', new ShortType())
            ->add('link', new LinkType())
            ->add('upload', new UploadType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\SubsectionBundle\Entity\Box1'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_subsectionbundle_box1';
    }
}
