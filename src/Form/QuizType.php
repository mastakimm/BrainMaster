<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuizType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $questions = $options['questions'];

        foreach ($questions as $question) {
            $choices = [];
            foreach ($question->getReponses() as $reponse) {
                $choices[$reponse->getReponse()] = $reponse->getId();
            }

            $builder->add('question_' . $question->getId(), ChoiceType::class, [
                'choices' => $choices,
                'expanded' => true,
                'multiple' => false,
                'label' => $question->getQuestion(),
                'attr' => ['class' => 'block p-2 border rounded w-full']
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'questions' => [],
        ]);
    }
}
