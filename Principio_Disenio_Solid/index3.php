<?php

use App\solid\dip\NotificationService;
use App\solid\dip\User;

require __DIR__ . '/vendor/autoload.php';

$user = new User('Bryan LCL', 'blcl@gmail.com', '0987453689');

$notification = new NotificationService();
$notification->notify($user, "Hola, Bienvenido al mundo de la programación ");