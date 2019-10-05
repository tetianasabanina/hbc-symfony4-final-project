<?php

    namespace App\Form;

    use App\Entity\AloiteLaatikko;
    use Symfony\Component\Form\AbstractType;
    use Symfony\Component\Form\FormBuilderInterface;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\DateType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\OptionsResolver\OptionsResolver;

    class AloiteFormType extends AbstractType{

        public function buildForm(FormBuilderInterface $builder, array $options) {
            $builder
                ->add('Aihe', TextType::class, ['label' => 'Aihe'])
                ->add('Etunimi', TextType::class, ['label'=> 'Etunimi'])
                ->add('Sukunimi', TextType::class, ['label'=> 'Sukunimi'])
                ->add('Kuvaus', TextareaType::class, ['label'=> 'Kuvaus'])
                ->add('Ote', TextType::class, ['label'=> 'Ote'])
                ->add('Kirjauspaiva', DateType::class, ['label'=> 'Kirjauspaiva'])
                ->add('Spostiosoite', TextType::class, ['label'=> 'Sähköpostiosoite'])
                ->add('Save', SubmitType::class, [
                    'label'=> 'Talenna',
                    'attr' => ['class'=> 'btn btn-info']]);


        }

        public function configureOptions(OptionsResolver $resolver) {
            $resolver->setDefaults([
                'data-class' => AloiteLaatikko::class,

            ]);
        }
    }

?>