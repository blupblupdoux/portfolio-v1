<?php

namespace App\Form;

use App\Entity\School;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SchoolType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, [
            'attr' => ['class' => 'form-control'],
        ])
        ->add('date', TextType::class, [
            'attr' => ['class' => 'form-control'],
            'required' => false,
        ])
        ->add('description', TextAreaType::class, [
            'attr' => ['class' => 'form-control'],
            'required' => false,
        ])
        ->add('submit', SubmitType::class, [
            'label' => 'Submit',
            'attr' => ['class' => 'btn btn-primary'],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => School::class,
        ]);
    }
}
