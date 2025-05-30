<?php

namespace App\solid\ocp\pagos;

use App\solid\ocp\interfaces\MetodoPago;

class Transferencia implements MetodoPago{
    
    public function procesar(float $monto): void {
        echo "Procesando pago con transferencia por un monto de $monto </br>";
    }

}