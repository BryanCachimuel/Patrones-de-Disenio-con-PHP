<?php

namespace App\solid\dip;

use App\solid\dip\interfaces\Notifier;

class SmsSender implements Notifier{
    
    public function send(User $user, string $message):void {
        echo "Enviando SMS para {$user->getPhone()} con mensaje: $message <br>";
    }

}