<?php

namespace App\solid\dip;

class EmailSender {

    public function send(User $user, string $message):void {

        echo "Enviando email para {$user->getEmail()} con el mensaje: $message <br>";

    }

}