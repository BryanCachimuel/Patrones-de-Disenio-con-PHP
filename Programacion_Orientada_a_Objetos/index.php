<?php

/* importar la clase persona*/
require_once("clases/Persona.php");

/* creando un objeto de la clase Persona */
$persona1 = new Persona("Adriana","Diaz","Chimbo",29);
$persona2 = new Persona("Josue","Alba","Necpas",35);

echo "El nombre de la persona 1 es: " . $persona1->getNombre();
echo "<br>";
echo "El nombre de la persona 2 es: " . $persona2->getNombre();
echo "<br>";

/* acceder a las propiedades de la clase Persona */
$persona3 = new Persona("Michelle","Lara","Meneces",30);
$persona3->setNombre("Karen");

echo "El nombre de la persona 3 es: " . $persona3->getNombre();
echo "<br>";

$persona4 = new Persona("Nelson","Cacoango","Cuango",31);
$persona4->setNombre("Camilo");

echo "El nombre de la persona 4 es: " . $persona4->getNombre();
echo "<br>";
echo "<br>";
echo "<br>";
echo "Procedimiento de Herencia";
echo "<br>";

/* Pruebas del proceso de Herencia */
$ecuatoriano = new Ecuatoriano("Richard","Tarupí","Calan",32);
$ecuatoriano->setNombre("Richard");
echo "El nombre del ecuatoriano es: " . $ecuatoriano->getNombre() . " " . $ecuatoriano->getApellido();
echo "<br>";

$colombiano = new Colombiano("Edwin","Bastidas","Onofre",29);
echo "El nombre del colombiano es: " . $colombiano->getNombre() . " " . $colombiano->getApellido();





