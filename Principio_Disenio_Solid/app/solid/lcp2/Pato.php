<?php 

namespace App\solid\lcp;

use App\solid\lcp2\interfaces\AveVoladora;

class Pato extends Ave implements AveVoladora {

    public function volar(): void {
        echo "Estoy volando bajo <br>";
    }

}