<?php

namespace App\patrones\estructurales\adapter\factories;

use App\patrones\estructurales\adapter\EmailAdapter;
use App\patrones\estructurales\adapter\SMSAdapter;
use App\patrones\estructurales\adapter\services\EmailSender;
use App\patrones\estructurales\adapter\services\SMSSender;

class NotificationFactory {

    public static function create(string $type): Notification {
        return match($type){
            'email' => new EmailAdapter(new EmailSender()),
            'sms' => new SMSAdapter(new SMSSender()),
            default => throw new \InvalidArgumentException("Tipo de notificación no definido")
        };
    }

}