<?php

namespace App\patrones\estructurales\decorator;


class ConLeche extends BebidaDecorator{

    public function getDescription(): string {
        return $this->bebida->getDescription() . " con leche";
    }
    public function getCosto(): float {
        return $this->bebida->getCosto() . + (int)1.50;
    }

}