<?php

namespace App\Form;

//use App\Entity\Book;
use App\Entity\Teacher;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class TeacherType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        
        
            ->add('code', TextType::class,
            [
                'label' => 'Teacher code',
                'required' => true,
                'attr' =>
                [
                    'minlength' => 3
                ]
            ])
            ->add('age', NumberType::class,
            [
                'label' => 'Teacher age',
                'required' => true,
                'attr' =>
                [
                    'min' => 3,
                    'max' => 50
                ]
            ])
            ->add('name', TextType::class,
            [
                'label' => 'Teacher name',
                'required' => true,
                'attr' => [
                    'minlength' => 5
                ]
            ])
            ->add('gender', ChoiceType::class,
            [
                'label' => 'Teacher gender',
                'required' => true,
                'choices' => [
                    'Male' => 'Male',
                    'Female' => 'Female'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Teacher::class,
        ]);
    }
}