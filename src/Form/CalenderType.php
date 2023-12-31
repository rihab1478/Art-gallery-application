<?php

namespace App\Form;

use App\Entity\Calender;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class CalenderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title')
            ->add('start',DateTimeType::class, [
                'date_widget' => 'single_text'
            ])
            ->add('end',DateTimeType::class, [
                'date_widget' => 'single_text'
            ])
            ->add('description')
            ->add('all_day')
            ->add('background_color', ColorType::class)
            ->add('border_color', ColorType::class)
            ->add('text_color', ColorType::class)
            ->add('add', SubmitType::class ,['label'=>'Valider'])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calender::class,
        ]);
    }
}
