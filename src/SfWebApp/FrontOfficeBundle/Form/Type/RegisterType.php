<?php


namespace SfWebApp\FrontOfficeBundle\Form\Type;


use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RegisterType extends RegistrationFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        parent::buildForm($builder, $options);

        $builder
            ->add('gender', 'choice', array(
                'label' => 'Gender',
                'translation_domain' => 'forms',
                'choices' => array(
                    'm' => 'M.',
                    'f' => 'Mme'
                )
            ))
            ->add('firstname', 'text', array(
                'label' => 'Firstname',
                'translation_domain' => 'forms'
            ))
            ->add('lastname', 'text', array(
                'label' => 'Lastname',
                'translation_domain' => 'forms'
            ))
            ->add('address', 'text', array(
                'label' => 'Address',
                'translation_domain' => 'forms'
            ))
            ->add('zip_code', 'text', array(
                'label' => 'Zip_code',
                'translation_domain' => 'forms'
            ))
            ->add('city', 'text', array(
                'label' => 'City',
                'translation_domain' => 'forms'
            ))
            ->add('country', 'text', array(
                'label' => 'Country',
                'translation_domain' => 'forms'
            ))
            ->add('phone', 'text', array(
                'label' => 'Phone',
                'translation_domain' => 'forms'
            ))
        ;
    }

    public function setDefaultOption(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'validation_groups' => array('Default', 'Register')
        ));
    }

    public function getName()
    {
        return 'sisi_web_fos_user_register';
    }
}