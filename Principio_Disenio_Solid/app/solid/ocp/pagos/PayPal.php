<?php

namespace App\solid\ocp\pagos;

use App\solid\ocp\interfaces\MetodoPago;

class PayPal implements MetodoPago{

    public function procesar(float $monto): void {
        echo "Procesando pago con Paypal por un monto de $monto </br>";
    }

}