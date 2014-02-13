<?php

namespace App\PageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use App\SubsectionBundle\Form\Box3Type;
use App\SubsectionBundle\Form\Box5Type;
use App\PagePartsBundle\Form\TitleType;

class PageType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('name', 'text')
            ->add('main', new Box3Type())
            ->add('sidebox', new Box5Type())
            ->add('active')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\PageBundle\Entity\Page'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_pagebundle_page';
    }
}
