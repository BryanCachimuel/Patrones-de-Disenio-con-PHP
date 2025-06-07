<?php

namespace App\patrones\estructurales\decorator;


class ConCanela extends BebidaDecorator{

    public function getDescription(): string {
        return $this->bebida->getDescription() . " con canela";
    }
    public function getCosto(): float {
        return $this->bebida->getCosto() . + (int)0.75;
    }

}