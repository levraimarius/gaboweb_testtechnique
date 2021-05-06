<?php

namespace App\DataFixtures;

use App\Entity\User;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    // Déclaration de la variable
    private $encoder;

    // Ce constructeur permet d'encoder le mot de passe
    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    // Création d'un utilisateur utilisant "admin" et "admin" comme identifiants
    public function load(ObjectManager $manager)
    {
        // Déclaration de la variable utilisant l'entité "User"
        $user = new User();

        // Définit et envoient les données dans la BDD
        $user->setUsername('admin');
        $plainPassword = 'admin';
        $encoded = $this->encoder->encodePassword($user, $plainPassword);
        $user->setPassword($encoded);
        $manager->persist($user);
        $manager->flush();
    }
}