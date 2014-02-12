<?php

namespace App\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use App\PagePartsBundle\Form\TitleType;
use App\SubsectionBundle\Form\Box2Type;
use App\SubsectionBundle\Form\Box3Type;
use App\SubsectionBundle\Form\Box4Type;

class CompanyType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title1', new TitleType())
            ->add('frontbox1', new Box3Type())
            ->add('frontbox2', new Box3Type())
            ->add('title2', new TitleType())
            ->add('sidebox1', new Box2Type())
            ->add('sidebox2', new Box2Type())
            ->add('sidebox3', new Box2Type())
            ->add('sidebox4', new Box2Type())
            ->add('bottombox', new Box4Type())
            ->add('active', 'checkbox', array('required'    => false,))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PageBundle\Entity\Company'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_pagebundle_company';
    }
}
