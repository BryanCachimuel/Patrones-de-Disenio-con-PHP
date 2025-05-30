<?php

namespace App\solid\ocp\interfaces;

interface MetodoPago {
    public function procesar(float $monto): void;
}