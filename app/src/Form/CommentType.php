<?php

namespace App\Form;

use App\Entity\Comment;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('creator')
//            ->add('creator', EntityType::class, array(
//                    'multiple' => false,
//                    'expanded' => true,
//                    'choice_label' => 'username',
//                    'choice_value' => 'id',
//                    'class'    => 'App\Entity\User',
//                )
//            )
            ->add('content')
            ->add('post', EntityType::class, array(
                    'multiple' => false,
                    'expanded' => true,
                    'choice_label' => 'title',
                    'class'    => 'App\Entity\Post',
                )
            )
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
