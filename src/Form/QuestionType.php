<?php

namespace App\Form;

use App\Entity\Question;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('question', TextType::class, [
                'label' => 'Question',
                'attr' => ['class' => 'form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm'],
                'label_attr' => ['class' => 'block text-sm font-medium text-gray-700'],
            ])
            ->add('reponses', CollectionType::class, [
                'entry_type' => ReponseType::class,
                'entry_options' => [
                    'label' => false,
                    'attr' => ['class' => 'form-input mt-1 block w-full rounded-md border-gray-300 shadow-sm'],
                ],
                'allow_add' => true,
                'by_reference' => false,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Question::class,
        ]);
    }
}
