<?php

namespace App\solid\isp\interfaces;

interface ILavaPlatos {
    
    public function lavarPlatos(): void;
    public function secarPlatos(): void;
    public function guardarPlatos(): void;
    public function limpiarCocina(): void;
    public function organizarUtensillos(): void;
    
}