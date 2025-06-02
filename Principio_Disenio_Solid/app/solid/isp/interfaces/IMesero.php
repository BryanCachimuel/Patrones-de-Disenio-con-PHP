<?php

namespace App\solid\isp\interfaces;

interface IMesero {

    public function tomarOrden(): void;
    public function servirComida(): void;
    public function cobrarCuenta(): void;
    public function limpiarMesa(): void;
    public function atenderCliente(): void;
    
}