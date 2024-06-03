<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

interface MyUserInterface extends UserInterface
{
    public function getNombre(): ?string;
}

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    #[Assert\Email(
        message: "El email '{{ value }}' no es un email válido."
    )]
    #[Assert\NotBlank(
        message: 'El email no puede estar vacío.'
    )]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column]
    #[Assert\Length(
        min: 8,
        max: 24,
        minMessage: 'La contraseña debe tener al menos {{ limit }} caracteres.'
    )]
    #[Assert\Regex(
        pattern: '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
        message: 'La contraseña debe contener al menos una letra mayúscula, una letra minúscula, un número y un carácter especial.'
    )]
    private ?string $password = null;

    #[ORM\Column]
    private bool $isVerified = false;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 2,
        minMessage: 'El nombre debe tener al menos {{ limit }} caracteres.'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
        message: 'El nombre solo puede contener letras y espacios.'
    )]
    #[Assert\NotBlank(
        message: 'El nombre no puede estar vacío.'
    )]
    private ?string $nombre = null;

    #[ORM\Column(length: 255)]
    #[Assert\Length(
        min: 2,
        minMessage: 'Los apellidos deben tener al menos {{ limit }} caracteres.'
    )]
    #[Assert\Regex(
        pattern: '/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',
        message: 'Los apellidos solo pueden contener letras y espacios.'
    )]
    #[Assert\NotBlank(
        message: 'Los apellidos no pueden estar vacíos.'
    )]
    private ?string $apellidos = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\LessThan(
        value: '-18 years',
        message: 'Debes tener al menos 18 años para registrarte.'
    )]
    #[Assert\GreaterThan(
        value: '-130 years',
        message: 'La fecha de nacimiento no puede ser mayor a 130 años.'
    )]
    #[Assert\NotBlank(
        message: 'La fecha de nacimiento no puede estar vacía.'
    )]
    private ?\DateTimeInterface $fnac = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $verificationToken = null;

    #[ORM\Column(length: 255, nullable: true, options: ["default" => "images/avatar/default.png"])]
    private ?string $avatar = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }


    public function getSalt()
    {
        // No salt is needed when using bcrypt or argon
        return null;
    }


    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;

        return $this;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): static
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getFnac(): ?\DateTimeInterface
    {
        return $this->fnac;
    }

    public function setFnac(\DateTimeInterface $fnac): static
    {
        $this->fnac = $fnac;

        return $this;
    }

    public function getVerificationToken(): ?string
    {
        return $this->verificationToken;
    }

    public function setVerificationToken(?string $verificationToken): static
    {
        $this->verificationToken = $verificationToken;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public static function getAvatarChoices(): array
    {
        return [    
            'avatar1' => 'images/avatar/avatar1.png',
            'avatar2' => 'images/avatar/avatar2.png',
            'avatar3' => 'images/avatar/avatar3.png',
            'avatar4' => 'images/avatar/avatar4.png',
            'avatar5' => 'images/avatar/avatar5.png',
            'avatar6' => 'images/avatar/avatar6.png',
            'avatar7' => 'images/avatar/avatar7.png',
            'avatar8' => 'images/avatar/avatar8.png',
        ];
    }

    public function getAvatarUrl(): ?string
    {
        return $this->avatar ? self::getAvatarChoices()[$this->avatar] : null;
    }

    public function setAvatar(?string $avatar): static
    {
        $this->avatar = $avatar;

        return $this;
    }
}
