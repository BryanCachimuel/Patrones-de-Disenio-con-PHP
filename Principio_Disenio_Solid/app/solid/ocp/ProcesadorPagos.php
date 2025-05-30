<?php

/* ocp ->Principio abierto cerrado 
    implica que se tiene libre elección de crear las clases necesarias que esto quiere decir el proceso abierto
    pero no se puede agregar nada dentro de esta clase eso quiere decir que esta cerrada para su modificación
*/
namespace App\solid\ocp;

use App\solid\ocp\interfaces\MetodoPago;

class ProcesadorPagos {

    public function procesarPago(MetodoPago $metodo, float $monto):void {
        $metodo->procesar($monto);
        echo "Generando orden <br>";
    }

}