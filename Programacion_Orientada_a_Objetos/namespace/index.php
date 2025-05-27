<?php 

/* usuando los namespace */
use Directorio1\Humano;
use Directorio2\Humano as Humano2;

require_once("Directorio1/Humano.php");
require_once("Directorio2/Humano.php");

$humano1 = new Humano;
$humano1->bienvenida();

echo "<br>";

$humano2 = new Humano2;
$humano2->bienvenida();