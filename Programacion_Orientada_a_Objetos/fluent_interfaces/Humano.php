<?php 

class Humano {
    
    public $nombre, $apellido_paterno, $apellido_materno, $cedula;

    public function setNombre($nombre){
        $this->nombre = $nombre;
        return $this;
    }

    public function setApellidos($apellido_paterno, $apellido_materno){
        $this->apellido_paterno = $apellido_paterno;
        $this->apellido_materno = $apellido_materno;
        return $this;
    }

    public function setCedula($cedula){
        $this->cedula = $cedula;
        return $this;
    }

    public function imprimirDatos(){
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Apellido paterno: " . $this->apellido_paterno . "<br>";
        echo "Apellido materno: " . $this->apellido_materno . "<br>";
        echo "Cédula: " . $this->cedula . "<brfluent>";
    }

}

/* Forma normal de impresión de información */
$humano = new Humano;
/*$humano->setNombre("Evelin");
$humano->setApellidos("Haro","Guaman");
$humano->setCedula("1008479685");
$humano->imprimirDatos();*/

/* con fluent interfaces y la aplicación de de los retornos $this en cada método set se hace lo siguiente */
$humano->setNombre("Evelin")
       ->setApellidos("Haro","Guaman")
       ->setCedula("1008479685")
       ->imprimirDatos();