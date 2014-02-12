<?php

namespace App\SubsectionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use App\UploadBundle\Form\UploadType;
use App\PagePartsBundle\Form\Subtitle1Type;
use App\PagePartsBundle\Form\TextType;

class Box3Type extends AbstractType
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
            ->add('text', new TextType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\SubsectionBundle\Entity\Box3'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_subsectionbundle_box3';
    }
}
