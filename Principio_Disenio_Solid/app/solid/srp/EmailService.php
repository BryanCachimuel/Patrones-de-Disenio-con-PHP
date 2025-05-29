<?php

/* clase creada con el fin de solo notificar */
namespace App\solid\srp;

use App\solid\srp\User;

class EmailService {

    public function sendEmail(User $user): void {
        echo "Enviando correo {$user->getEmail()}. </br>";
    }

}