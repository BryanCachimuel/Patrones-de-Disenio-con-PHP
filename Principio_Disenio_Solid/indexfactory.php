<?php

use App\patrones\creacionales\factory\NotificadorFactory;

require __DIR__ . '/vendor/autoload.php';

$type = 'sms';

try {
    $notification = NotificadorFactory::create($type);
    $notification->sendNotification('Hola, está es una notificación de prueba');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . '<br>';
    exit;
}