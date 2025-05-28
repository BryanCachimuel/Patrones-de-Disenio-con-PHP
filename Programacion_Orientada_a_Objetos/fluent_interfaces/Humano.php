<?php 

class Humano {
    
    /*
    esto se hace con php7
    public $nombre, $apellido_paterno, $apellido_materno, $cedula;

    public function __construct($nombre, $apellido_paterno, $apellido_materno, $cedula) {
        $this->nombre = $nombre; 
        $this->apellido_paterno = $apellido_paterno;
        $this->$apellido_materno = $apellido_materno; 
        $this->cedula = $cedula;
    }*/

    /* con php8 se puede hacer de la siguiente manera */
    public function __construct(public $nombre, public $apellido_paterno, public $apellido_materno, public $cedula) {
        
    }

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
$humano = new Humano("Daysi","Imbaquingo","Erazo","0408479685");
/*$humano->setNombre("Evelin");
$humano->setApellidos("Haro","Guaman");
$humano->setCedula("1008479685");
$humano->imprimirDatos();*/

/* con fluent interfaces y la aplicación de de los retornos $this en cada método set se hace lo siguiente */
$humano->setNombre("Evelin")
       ->setApellidos("Haro","Guaman")
       ->setCedula("1008479685")
       ->imprimirDatos();

echo "<br>";
$humano2 = new Humano("Irene","Lima","Andrade","1008957853");
$humano2->imprimirDatos();

echo "<br>";
/* Una forma de dar los atributos con nombre */
$humano3 = new Humano(nombre:"Cristina", apellido_paterno:"Garcia", apellido_materno:"Fuentes", cedula:"1004773692");
$humano3->imprimirDatos();
