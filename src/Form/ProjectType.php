<?php

namespace App\Form;

use App\Entity\Image;
use App\Entity\Job;
use App\Entity\Project;
use App\Entity\School;
use App\Entity\Tag;

use App\Form\ImageType;

use Symfony\Component\Form\AbstractType;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class ProjectType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('description', TextareaType::class, [
                'attr' => ['class' => 'form-control'],
            ])
            ->add('tags', EntityType::class, [
                'class' => Tag::class,
                'multiple' => true,
                'expanded' => true,
                'attr' => ['class' => 'form-check'],
            ])
            ->add('school', EntityType::class, [
                'class' => School::class,
                'placeholder' => 'Unset',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('job', EntityType::class, [
                'class' => Job::class,
                'placeholder' => 'Unset',
                'required' => false,
                'attr' => ['class' => 'form-control'],
            ])
            ->add('mainImageForm', FileType::class, [
                'label' => 'Main image',
                'mapped' => false,
                'multiple' => false,
                'required' => false,
            ])
            ->add('imagesForm', FileType::class, [
                'label' => 'image(s)',
                'mapped' => false,
                'multiple' => true,
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
            'data_class' => Project::class,
        ]);
    }
}
