<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\Regex;

use function PHPSTORM_META\type;
use function PHPUnit\Framework\stringContains;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $avatarChoices = array_keys(User::getAvatarChoices());

        $builder
            ->add('email', EmailType::class, [
                'attr' => ['autocomplete' => 'email', 'novalidate' => 'novalidate'],
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Introduzca un email',
                    ]),
                ],

            ])
            ->add('nombre', TextType::class, [
                'attr' => ['autocomplete' => 'name', 'novalidate' => 'novalidate'],
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Introduzca un nombre',
                    ]),
                ],
            ])
            ->add('apellidos', TextType::class, [
                'attr' => ['autocomplete' => 'surname', 'novalidate' => 'novalidate'],
                'required' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Introduzca un apellido',
                    ]),
                ],
            ])
            ->add('fnac', BirthdayType::class, [
                'widget' => 'single_text',
                'constraints' => [
                    new NotBlank([
                        'message' => 'Introduzca una fecha de nacimiento',
                    ])
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'attr' => ['novalidate' => 'novalidate'],
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'Tienes que aceptar nuestros términos y condiciones.',
                    ]),
                ],
            ])
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
            ->add('avatar', ChoiceType::class, [
                'choices' => $avatarChoices,
                'expanded' => true,
                'multiple' => false,
                'required' => false,
                'placeholder' => false,
                'data' => reset($avatarChoices),
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
