<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nomEtablissement')
            ->add('villeEtablissement')
            ->add('distanciel')
            ->add('dateD', DateType::class, [
                'widget' => 'single_text'
            ])
            ->add('dateF', DateType::class, [
                'widget' => 'single_text',
                'required' => false
            ])    
            ->add('nomFormation')
            ->add('specialite')
            ->add('niveau')
            ->add('category')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
