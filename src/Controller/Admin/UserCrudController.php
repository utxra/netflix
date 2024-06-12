<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\ChoiceList\Factory\Cache\ChoiceLabel;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Csrf\TokenGenerator\TokenGeneratorInterface;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserCrudController extends AbstractCrudController
{

    
    public function __construct(public TokenGeneratorInterface $tokenGenerator, public UserPasswordHasherInterface $passwordHasher)
    {
    }

    public function createEntity(string $entityFqcn)
    {
        $user = new User();
        $user->setVerificationToken($this->tokenGenerator->generateToken());
        $user->setFnac(new \DateTime(-18 . ' years'));
        $user->setIsVerified(true);

        return $user;
    }

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('email')
                ->setFormTypeOptions([]),
            TextField::new('nombre')
                ->setFormTypeOptions([]),

            TextField::new('apellidos')
                ->setFormTypeOptions([]),

            DateField::new('fnac')
                ->setFormTypeOptions([
                    'constraints' => [
                        new NotBlank([
                            'message' => 'La fecha de nacimiento no puede estar vacía',
                        ]),
                    ],
                ]),
            TextField::new('password', 'Contraseña')
                ->setFormType(PasswordType::class)
                ->onlyOnForms()
                ->setFormTypeOptions([
                    'constraints' => [
                        new NotBlank([
                            'message' => 'La contraseña no puede estar vacía',
                        ]),
                    ],
                ]),
            TextField::new('verificationToken', 'Token')
                ->hideOnForm()
                ->hideOnIndex()
                ->setFormTypeOption('disabled', true)
                ->setFormTypeOptions([
                    'constraints' => [
                        
                    ],
                ]),
            ChoiceField::new('avatar')
                ->setChoices([
                    'Avatar 1' => 'avatar1',
                    'Avatar 2' => 'avatar2',
                    'Avatar 3' => 'avatar3',
                    'Avatar 4' => 'avatar4',
                    'Avatar 5' => 'avatar5',
                    'Avatar 6' => 'avatar6',
                    'Avatar 7' => 'avatar7',
                    'Avatar 8' => 'avatar8',
                ])
                ->setFormTypeOption('data', 'avatar1')
                ->setFormTypeOptions([
                    'constraints' => [
                        new NotBlank([
                            'message' => 'Debes de elegir un avatar',
                        ]),
                    ],
                ]),
            BooleanField::new('isVerified', 'Verificado')
                ->setFormTypeOptions([])
                ->setFormTypeOption('disabled', true)
            ];
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $entityInstance->setPassword($this->passwordHasher->hashPassword($entityInstance, $entityInstance->getPassword()));
        parent::persistEntity($entityManager, $entityInstance);
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $entityInstance->setPassword($this->passwordHasher->hashPassword($entityInstance, $entityInstance->getPassword()));
        parent::updateEntity($entityManager, $entityInstance);
    }

}
