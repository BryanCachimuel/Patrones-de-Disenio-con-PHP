<?php

namespace App\patrones\estructurales\adapter;

use App\patrones\estructurales\adapter\factories\Notification;
use App\patrones\estructurales\adapter\services\EmailSender;

class EmailAdapter implements Notification{

    private EmailSender $emailSender;

    public function __construct(EmailSender $emailSender) {
        $this->emailSender = $emailSender;
    }

    public function send(string $message): void {
        $this->emailSender->sendEmail($message);
    }

}