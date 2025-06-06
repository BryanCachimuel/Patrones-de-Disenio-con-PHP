<?php

namespace App\patrones\estructurales\decorator;

class CafeSimple implements Bebida{

    public function getDescription(): string {
        return "Café";
    }
    public function getCosto(): float {
        return 2.00;
    }

}