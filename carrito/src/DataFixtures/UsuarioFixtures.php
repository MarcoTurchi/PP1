<?php

namespace App\DataFixtures;

use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UsuarioFixtures extends Fixture
{
    public function __construct(
        private UserPasswordHasherInterface $passwordHasher,
    ) {
    }

    public function load(ObjectManager $manager): void
    {
        for ($index = 1; $index <= 5; $index++) {
            $usuario = new Usuario();
            $usuario->setNombre('Usuario' . $index);
            $usuario->setEmail('usuario' . $index . '@gmail.com');
            $usuario->setPassword($this->passwordHasher->hashPassword($usuario, '123'));
            $usuario->setRoles(['ROLE_USER']);

            $manager->persist($usuario);
        }

        $manager->flush();
    }
}