<?php

use App\patrones\creacionales\builder\UserBuilder;

require __DIR__ . '/vendor/autoload.php';

$user = (new UserBuilder())
        ->setName('Angelita Ruano')
        ->setEmail('marl@outlook.com')
        ->setPassword('123456789')
        ->build();

echo "Nombre: " .$user->getName() . "<br>";
echo "Email: " .$user->getEmail() . "<br>";
