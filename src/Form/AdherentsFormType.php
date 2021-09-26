<?php

namespace App\Form;

use App\Entity\Adherents;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdherentsFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('adressePostale')
            ->add('telephone')
            ->add('mail')
            ->add('dateNaissance')
            ->add('reglement')
            ->add('etatdossier')
            ->add('certificatMedical')
            ->add('renouvellementCertificat')
            ->add('certificatAnPrec')
            ->add('renouvQuest')
            ->add('datePaiement')
            ->add('moyenPaiement')
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Adherents::class,
        ]);
    }
}
