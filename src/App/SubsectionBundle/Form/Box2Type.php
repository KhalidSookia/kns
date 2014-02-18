<?php

namespace App\SubsectionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use App\PagePartsBundle\Form\Subtitle1Type;
use App\PagePartsBundle\Form\Subtitle3Type;
use App\PagePartsBundle\Form\LinkType;
use App\PagePartsBundle\Form\ShortType;
use App\UploadBundle\Form\UploadType;

class Box2Type extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('upload', new UploadType())
            ->add('subtitle1', new Subtitle1Type())
            ->add('short', new ShortType())
            ->add('link', new LinkType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\SubsectionBundle\Entity\Box2'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_subsectionbundle_box2';
    }
}
