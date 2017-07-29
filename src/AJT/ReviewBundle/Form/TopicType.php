<?php

namespace AJT\ReviewBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class TopicType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('topic')
            ->add('alternativeName', TextareaType::class, array('attr' => array('cols' => 50, 'rows' =>10 ), 'label' => 'Alternative names', 'required' => false))
            ->add('saveTopic', SubmitType::class, array('label' => 'Save Topic'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AJT\ReviewBundle\Entity\Topic'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ajt_reviewbundle_topic';
    }


}
