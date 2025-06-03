<?php

namespace App\patrones\creacionales\factory;

use App\patrones\creacionales\factory\interfaces\NotificationInterface;
use App\patrones\creacionales\factory\notificadores\EmailNotification;
use App\patrones\creacionales\factory\notificadores\SMSNotification;

class NotificadorFactory {

    public static function create(string $type): NotificationInterface {
        return match($type){
            'sms' => new SMSNotification(),
            'email' => new EmailNotification(),
            default => throw new \InvalidArgumentException("Tipo de notificación no soportado: $type"),
        };
    }
 
}