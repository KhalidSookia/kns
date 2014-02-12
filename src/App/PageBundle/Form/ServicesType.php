<?php

namespace App\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use App\PagePartsBundle\Form\TitleType;
use App\SubsectionBundle\Form\Box5Type;
use App\SubsectionBundle\Form\Box6Type;
use App\SubsectionBundle\Form\Box7Type;

class ServicesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title1', new TitleType())
            ->add('frontbox1', new Box5Type())
            ->add('frontbox2', new Box5Type())
            ->add('frontbox3', new Box5Type())
            ->add('frontbox4', new Box5Type())
            ->add('frontbox5', new Box5Type())
            ->add('frontbox6', new Box5Type())
            ->add('bottombox1', new Box6Type())
            ->add('bottombox2', new Box7Type())
            ->add('active', 'checkbox', array('required'    => false,))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PageBundle\Entity\Services'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_pagebundle_services';
    }
}
