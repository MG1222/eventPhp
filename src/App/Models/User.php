<?php
namespace App\Models;
class User
{

    private ?int $id = null;
    private string $fullName;
    private ?string $pseudo = null;
    private string $email;
    private string $password;
    private string $passwordConfirmation;
    private ?string $profilImage = null;
    /* private DateTime $createdAt; */


    /* ID */
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;

    }

    /* FULL NAME */

    public function getFullName(): string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): void
    {
        $this->fullName = $fullName;
    }

    /* PSEUDO */

    public function getPseudo(): string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): void
    {
        $this->pseudo = $pseudo;
    }


    /* EMAIL */

    public function getEmail(): string
    {
        return $this->email;
    }

    
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /* PASSWORD */
    
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /* PASSWORD CONFIRMATION */

    public function getPasswordConfirmation(): string
    {
        return $this->passwordConfirmation;
    }

    public function setPasswordConfirmation(string $passwordConfirmation): void
    {
        $this->passwordConfirmation = $passwordConfirmation;
    }

    /* PROFIL IMAGE */

    public function getProfilImage(): string
    {
        return $this->profilImage;
    }

    public function setProfilImage(string $profilImage): void
    {
        $this->profilImage = $profilImage;
    }

   /*  /* CREATED AT 

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    } */

    /* Validate User */

    public function isValid(): array
    {
        $errors = [];
        
      if (filter_var($this->email, FILTER_VALIDATE_EMAIL) === false) {
             $errors['email'] = 'Format d\'email invalide ! THX';
         }
        
        if (strlen($this->plainPassword) < 8) {
            $errors['password'] = 'Le mot de passe doit contenir au moins 8 caractères ! THX';
        }
        
        
        return $errors;
    }

    



}