<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, ['required' => true, 'label' => "Nom de l'article"])
            ->add('price', TextType::class, ['required' => true, 'label' => "Prix de l'article"])
            ->add('descMin', TextType::class, ['required' => true, 'label' => "Description simple de l'article"])
            ->add('descLong', TextareaType::class, ['required' => true, 'label' => "Description détailler de l'article"])
            ->add('linkedTo')
            ->add('stock')
            ->add('weight')
            ->add('categorie', EntityType::class, array(
                'class' => 'AdminBundle\Entity\Categorie',
                'choice_label' => 'name'
            ))
            ->add('manufactor', EntityType::class, array(
                'class' => 'AdminBundle\Entity\Manufactor',
                'choice_label' => 'name'
            ))
            ->add('tva', EntityType::class, array(
                'class' => 'AdminBundle\Entity\Tax',
                'choice_label' => 'rate'
            ))
            ->add('compatibilities', EntityType::class, array(
                'class' => 'AppBundle\Entity\Article_compatibilities',
                'choice_label' => 'reference'
            ))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Article'
        ));
    }
}
