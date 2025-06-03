<?php

namespace App\patrones\creacionales\factory\notificadores;

use App\patrones\creacionales\factory\interfaces\NotificationInterface;

class EmailNotification implements NotificationInterface{

    public function sendNotification(string $message): void {
        // Aquí va la lógica para enviar un correo electrónico
        echo "Enviando correo electrónico: " . $message . '<br>';
    }

}