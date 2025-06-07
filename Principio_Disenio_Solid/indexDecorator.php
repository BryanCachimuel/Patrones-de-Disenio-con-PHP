<?php

use App\patrones\estructurales\decorator\CafeSimple;
use App\patrones\estructurales\decorator\ConCanela;
use App\patrones\estructurales\decorator\ConLeche;

require __DIR__ . "/vendor/autoload.php";

$bebida = new CafeSimple();
//$bebida = new ConLeche($bebida);
$bebida = new ConCanela($bebida);

echo "Descripción: " . $bebida->getDescription() . "<br>";
echo "Costo: " . $bebida->getCosto() . "<br>";