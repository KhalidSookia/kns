<?php

namespace App\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use App\PagePartsBundle\Form\TitleType;
use App\PagePartsBundle\Form\ShortType;
use App\SubsectionBundle\Form\Box1Type;
use App\SubsectionBundle\Form\Box2Type;

class MainType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title1', new TitleType())
            ->add('title2', new TitleType())
            ->add('various', new ShortType())
            ->add('frontbox1', new Box1Type())
            ->add('frontbox2', new Box1Type())
            ->add('frontbox3', new Box1Type())
            ->add('frontbox4', new Box1Type())
            ->add('sidebox1', new Box2Type())
            ->add('sidebox2', new Box2Type())
            ->add('sidebox3', new Box2Type())
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PageBundle\Entity\Main'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_pagebundle_main';
    }
}
