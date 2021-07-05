<?php

namespace App\Form;

use App\Entity\Post;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('creator')
//            ->add('creator', EntityType::class, array(
//                    'multiple' => false,
//                    'choice_label' => 'username',
//                    'choice_value' => function (?User $entity) {
//                        return $entity ? $entity->getId() : '';
//                    },
//                    'class'    => 'App\Entity\User',
//                )
//            )
            ->add('title')
            ->add('content')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Post::class,
        ]);
    }
}
