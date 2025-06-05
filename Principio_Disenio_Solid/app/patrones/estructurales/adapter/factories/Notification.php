<?php

namespace App\patrones\estructurales\adapter\factories;

interface Notification {

    public function send(string $message): void;

}