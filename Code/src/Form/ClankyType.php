<?php

namespace App\Form;

use App\Entity\Clanky;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ClankyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nazev_clanku')
            ->add('autor_clanku')
            ->add('abstrakt_clanku')
            ->add('text_clanku')
            ->add('img_url')
            ->add('datum_publikace')
            ->add('id_uzivatele')
            ->add('id_kategorie');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Clanky::class,
        ]);
    }
}
