<?php

namespace App\solid\isp\interfaces;

interface IChef {

    public function cocinar(): void;
    public function prepararIngredientes(): void;
    public function supervisarCocina(): void;
    
}