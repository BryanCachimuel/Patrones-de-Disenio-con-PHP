<?php

namespace App\solid\dip;

use App\solid\dip\interfaces\Notifier;

class NotificationService {

    private Notifier $notifier;

    public function __construct(Notifier $notifier) {
        $this->notifier= $notifier;
    }

    public function notify(User $user, string $message) {
        // acciones que quiero que ocurran antes de que se envie el email
        $this->notifier->send($user, $message);
         // acciones que quiero que ocurran después de que se envie el email
    }

}