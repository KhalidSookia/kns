<?php

namespace App\CarouselBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use App\UploadBundle\Form\UploadType;
use App\UploadBundle\Form;

class CarouselType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('active', 'checkbox', array('required'    => false,))
            ->add('upload', new UploadType())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\CarouselBundle\Entity\Carousel'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_carouselbundle_carousel';
    }
}
