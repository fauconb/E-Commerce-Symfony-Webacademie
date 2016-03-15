<?php

namespace AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CategorieType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['required' => true, 'label' => "Nom de la catégorie"])
            ->add('descMin', TextType::class, ['required' => true, 'label' => "Description simplifier de la catégorie"])
            ->add('descLong', TextareaType::class, ['required' => true, 'label' => "Description longue"])
            ->add('parent', EntityType::class, array(
                'class' => 'AdminBundle\Entity\Categorie',
                'choice_label' => 'name',
                'label' => "Si c'est une sous catégorie choissisez la catégorie parent",
                'required' => false,
                'empty_data'  => null,
                'choice_value' => null,
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AdminBundle\Entity\Categorie'
        ));
    }
}
