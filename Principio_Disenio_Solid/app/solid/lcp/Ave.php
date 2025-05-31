<?php

/* Principio de sustitución de Liskov */

namespace App\solid\lcp;

class Ave extends AveVoladora{

    public function comer(): void {
        echo "Estoy comiendo <br>";
    }

}