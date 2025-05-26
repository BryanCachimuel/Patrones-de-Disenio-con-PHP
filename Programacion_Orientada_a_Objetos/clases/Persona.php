<?php

class Persona {
    /* propiedades */
    public $nombre;
    public $apellido1, $apellido2;
    public $edad;

    /* método constructor */

    public function __construct($nombre,$apellido1,$apellido2,$edad){
        $this->nombre = $nombre;
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
        $this->edad = $edad;
    }

    /* métodos getter y setter */
    public function getNombre(){
        return ucwords($this->nombre);
    }

    public function setNombre($nombre){
        $this->nombre = strtolower($nombre);
    }

    public function getApellido(){
        return $this->apellido1 . " " . $this->apellido2;
    }

    public function setApellido($apellido1, $apellido2){
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }
}

/* Herencia */
class Ecuatoriano extends Persona{
    public $provincia, $ciudad;

    public function setApellido($apellido1, $apellido2){
        // forma de extender un métod de la clase padre mediante parent
        parent::setApellido($apellido1, $apellido2);
        echo "Los apellidos se asignaron con exito";
    }

}

class Colombiano extends Persona{
    public $departamento, $ciudad;

    public function getApellido(){
        return $this->apellido2 . " " . $this->apellido1;
    }

     public function setApellido($apellido1, $apellido2){
        $this->apellido1 = $apellido1;
        $this->apellido2 = $apellido2;
    }
}