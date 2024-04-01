<?php
namespace App\Form;

use App\Entity\Supplement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SupplementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prix')
            ->add('image', FileType::class, [
                'label' => 'Image',
                'mapped' => false, // Not mapped to the entity directly
                'required' => false, // Image may not be required
                'attr' => [
                    'accept' => 'image/*', // Allow only image files
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Supplement::class,
        ]);
    }
}
