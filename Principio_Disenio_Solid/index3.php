<?php

use App\solid\dip\EmailSender;
use App\solid\dip\NotificationService;
use App\solid\dip\SmsSender;
use App\solid\dip\User;

require __DIR__ . '/vendor/autoload.php';

$user = new User('Bryan LCL', 'blcl@gmail.com', '0987453689');

$notification = new NotificationService(new SmsSender());
$notification->notify($user, "Hola, Bienvenido al mundo de la programación ");