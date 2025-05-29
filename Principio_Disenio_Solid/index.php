<?php

use App\solid\srp\EmailService;
use App\solid\srp\User;
use App\solid\srp\UserRepository;

require __DIR__ . "/vendor/autoload.php";


$user = new User("Evelin Haro","eh@gamil.com");

// almacenar en la base de datos
$repository = new UserRepository();
$repository->save($user);

// notificar al usuario
$servicio = new EmailService();
$servicio->sendEmail($user);