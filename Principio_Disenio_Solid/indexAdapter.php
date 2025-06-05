<?php

use App\patrones\creacionales\factory\NotificadorFactory;

require __DIR__ . '/vendor/autoload.php';

$notification = NotificadorFactory::create('sms');

$notification->sendNotification('Este es un mensaje de prueba');