<?php

namespace App\Form;

use App\Entity\About;

use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AboutType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('age', IntegerType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('tel', TelType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('email', EmailType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('github', UrlType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('linkedin', UrlType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('blog', UrlType::class, [
                'attr' => ['class' => 'form-control'],
                'required' => false,
            ])
            ->add('city', TextType::class, [
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
            'data_class' => About::class,
        ]);
    }
}
