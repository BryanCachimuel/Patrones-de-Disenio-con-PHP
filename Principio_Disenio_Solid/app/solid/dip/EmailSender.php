<?php

namespace App\solid\dip;

use App\solid\dip\interfaces\Notifier;

class EmailSender implements Notifier{

    public function send(User $user, string $message):void {

        echo "Enviando email para {$user->getEmail()} con el mensaje: $message <br>";

    }

}