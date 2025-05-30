<?php

/* Principio de sustitución de Liskov */

namespace App\solid\lcp;

class Ave {

    public function comer(): void {
        echo "Estoy comiendo <br>";
    }

    public function volar(): void {
        echo "Estoy volando <br>";
    }

}