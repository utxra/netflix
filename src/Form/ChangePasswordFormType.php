<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\NotCompromisedPassword;
use Symfony\Component\Validator\Constraints\PasswordStrength;
use Symfony\Component\Validator\Constraints\Regex;

class ChangePasswordFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'required' => false,
                'mapped' => false,
                'invalid_message' => 'Las contraseñas no coinciden.',
                'first_options' => [
                    'help' => 'La contraseña debe tener entre 8 y 24 carácteres.
                    Debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.',
                    'attr' => ['autocomplete' => 'new-password', 'novalidate' => 'novalidate'],
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Introduzca una contraseña',
                        ]),
                        new Length([
                            'min' => 8,
                            'minMessage' => 'Tu contraseña como mínimo tendrá {{ limit }} characters',
                            // max length allowed by Symfony for security reasons
                            'max' => 24,
                        ]),
                        new Regex([
                            'pattern' => '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.])[A-Za-z\d@$!%*?&.]{8,}$/',
                            'message' => 'La contraseña debe tener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.',])
                    ],
                ],
                'second_options' => [
                    'attr' => ['autocomplete' => 'new-password']
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([]);
    }
}
