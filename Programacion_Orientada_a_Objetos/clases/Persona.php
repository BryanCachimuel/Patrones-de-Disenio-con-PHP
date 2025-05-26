<?php

class Persona {
    /* propiedades */
    public $nombre, $apellido, $edad;

    /* método constructor */

    public function __construct($nombre, $apellido, $edad){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    /* métodos getter y setter */
    public function getNombre(){
        return ucwords($this->nombre);
    }

    public function setNombre($nombre){
        $this->nombre = strtolower($nombre);
    }
}