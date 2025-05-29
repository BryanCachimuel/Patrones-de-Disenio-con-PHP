<?php

/* ocp ->Principio abierto cerrado */
namespace App\solid\ocp;

class ProcesadorPagos {

    public function procesarPago(string $metodo, float $monto):void {

        switch ($metodo) {
            case 'tarjeta':
                echo "Procesando pago con tarjeta de crédito por un monto de $monto </br>";
                break;

            case 'transferencia':
                echo "Procesando pago con transferencia por un monto de $monto </br>";
                break;

            default:
                throw new \InvalidArgumentException("Método de pago no soportado: $metodo");
        }

        echo "Generando orden";

    }

}