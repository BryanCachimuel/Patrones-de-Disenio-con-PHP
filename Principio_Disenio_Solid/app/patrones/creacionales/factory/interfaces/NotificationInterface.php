<?php

namespace App\patrones\creacionales\factory\interfaces;

interface NotificationInterface {

    public function sendNotification(string $message): void;

}