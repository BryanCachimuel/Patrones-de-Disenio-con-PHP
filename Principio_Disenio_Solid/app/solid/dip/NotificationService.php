<?php

namespace App\solid\dip;

class NotificationService {

    private EmailSender $emailSender;

    public function __construct() {
        $this->emailSender= new EmailSender();
    }

    public function notify(User $user, string $message) {
        // acciones que quiero que ocurran antes de que se envie el email
        $this->emailSender->send($user, $message);
         // acciones que quiero que ocurran después de que se envie el email
    }

}