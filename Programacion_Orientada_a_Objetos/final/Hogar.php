<?php

/* si no queremos que una clase extendienda para otras clases se pone la palabra reservada final */
final class Hogar {
    public $color, $seguridad;
}

/*class Departamento extends Hogar {

}*/

class Casa {
    public $color, $seguridad;

    /* si no queremos que este metodo sea sobre escrito 
    en las clases hijas de esta clase se debe poner final 
    a inicio del método */
    final public function asignacion(){
        echo "Este cuarto esta designad para ti";
    }
}

class Cuarto extends Casa{

    /*public function asignacion(){
        echo "Este cuarto me fue asignado";
    }*/
}

$cuarto = new Cuarto;
$cuarto->asignacion();