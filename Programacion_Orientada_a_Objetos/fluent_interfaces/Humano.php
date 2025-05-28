<?php 

class Humano {
    
    public $nombre, $apellido_paterno, $apellido_materno, $cedula;

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setApellidos($apellido_paterno, $apellido_materno){
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
    }

    public function setCedula($cedula){
        $this->cedula = $cedula;
    }

    public function imprimirDatos(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido paterno: " . $this->apellido_paterno . "<br>";
        echo "Apellido materno: " . $this->apellido_materno . "<br>";
        echo "Cédula: " . $this->cedula . "<br>";
    }

}