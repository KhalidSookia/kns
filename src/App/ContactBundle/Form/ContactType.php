<?php

namespace App\ContactBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text', array('attr' => array('placeholder' => 'John Doe'), 'required' => true))
            ->add('email', 'text', array('attr' => array('placeholder' => 'john@doe.com'), 'required' => true))
            ->add('pays', 'text', array('attr' => array('placeholder' => '+33'), 'required' => false))
            ->add('tel', 'text', array('attr' => array('placeholder' => '07 82 18 21 89'), 'required' => false))
            ->add('message', 'textarea', array('attr' => array('placeholder' => 'Votre message ici...'), 'required' => true))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'App\ContactBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'app_contactbundle_contact';
    }
}
