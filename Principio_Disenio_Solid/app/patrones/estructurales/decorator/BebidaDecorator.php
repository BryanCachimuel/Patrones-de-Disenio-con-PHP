<?php

namespace App\patrones\estructurales\decorator;

abstract class BebidaDecorator implements Bebida{

    protected Bebida $bebida;

    public function __construct(Bebida $bebida) {
        $this->bebida = $bebida;
    }

}