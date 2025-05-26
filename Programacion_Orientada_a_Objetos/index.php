<?php

/* importar la clase persona*/
require_once("clases/Persona.php");

/* creando un objeto de la clase Persona */
$persona1 = new Persona("Adriana","Diaz",29);
$persona2 = new Persona("Josue","Alba",35);

echo "El nombre de la persona 1 es: " . $persona1->getNombre();
echo "<br>";
echo "El nombre de la persona 2 es: " . $persona2->getNombre();
echo "<br>";

/* acceder a las propiedades de la clase Persona */
$persona3 = new Persona("Michelle","Lara",30);
$persona3->setNombre("Karen");

echo "El nombre de la persona 3 es: " . $persona3->getNombre();
echo "<br>";

$persona4 = new Persona("Nelson","Cacoango",31);
$persona4->setNombre("Camilo");

echo "El nombre de la persona 4 es: " . $persona4->getNombre();




