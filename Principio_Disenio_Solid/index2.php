<?php

/* index para ejecutar el proceso abierto cerrado OCP */

use App\solid\ocp\pagos\PayPal;
use App\solid\ocp\pagos\Tarjeta;
use App\solid\ocp\pagos\Transferencia;
use App\solid\ocp\ProcesadorPagos;

require __DIR__ . "/vendor/autoload.php";

$procesador = new ProcesadorPagos();
$procesador->procesarPago(new PayPal(), 1600);
$procesador->procesarPago(new Tarjeta(), 2400);
$procesador->procesarPago(new Transferencia(), 3600);