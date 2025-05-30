<?php

namespace App\solid\ocp\pagos;

use App\solid\ocp\interfaces\MetodoPago;

class Tarjeta implements MetodoPago {
    
    public function procesar(float $monto): void {
        echo "Procesando pago con tarjeta de crédito por un monto de $monto </br>";
    }

}