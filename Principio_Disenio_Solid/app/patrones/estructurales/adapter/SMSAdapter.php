<?php

namespace App\patrones\estructurales\adapter;

use App\patrones\estructurales\adapter\factories\Notification;
use App\patrones\estructurales\adapter\services\SMSSender;

class SMSAdapter implements Notification{

    private SMSSender $smsSender;

    public function __construct(SMSSender $smsSender) {
        $this->smsSender = $smsSender;
    }

    public function send(string $message): void {
        $this->smsSender->sendSMS($message);
    }

}