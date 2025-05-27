<?php

class Personas {
    public $nombre;
    public $apellido1, $apellido2;
    public $edad;

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

    public function saludo(){
        echo "Este es un saludo desde la clase padre";
    }
}

/* en php no existe la herencia multiple (una clase hija no puede heredar de varias clases padre) */
/* los traits no se pueden instanciar */
trait Latinoamericano {

    public function decirHola(){
        echo "Hola ";
    }

    public function saludar(){
        echo "Hola saludos desde el trait Latinoamericano";
    }

    public function saludolatinoamericano(){
        echo "Este es un saludo desde el trait latinoamericano";
    }

    protected function imprimirMensaje(){
        echo "Imprimiendo mensaje enviado desde trait Latinoamericano";
    }
}

trait Americano {

    public function decirMundo(){
        echo "mundo ";
    }

    public function saludar(){
        echo "Hola saludos desde el trait Americano";
    }

     public function saludoamericano(){
        echo "Este es un saludo desde el trait americano";
    }

    abstract public function codificandoSaludos();
}

trait Sudamericano {
    use Latinoamericano, Americano;

    public function saludar(){
        echo "Hola saludos desde el trait Sudamericano";
    }

    public function codificandoSaludos(){
        $this->decirHola();
        $this->decirMundo();
    }
}

class Uruguayo extends Personas{
    /* para no entrar en conflicto se debe poner que método de que trait vamos a usar en caso de que ambos trait tengan un mismo método */
    use Latinoamericano, Americano {
        Latinoamericano::saludar insteadOf Americano;
    }

    // precedencia cuando se tiene un método con el mismo nombre de la clase padre o del trait el método que va a precedir es el de clase hija
    public function saludo(){
        echo "Este es un saludo desde la clase hija";
    }

    public function codificandoSaludos(){
         $this->decirHola();
         $this->decirMundo();
    }
}

class Paraguayo extends Personas {
    // en caso de que un método sea protegido se puede transformar a publico
    use Latinoamericano{ imprimirMensaje as public; }

     public function saludando(){
        echo "Este es un saludo desde la clase hija2";
    }    
}

class Chileno extends Personas{
    use Sudamericano;

    public function codificandoSaludos(){
         $this->decirHola();
         $this->decirMundo();
    }
}



/* objetos para las clases */
$uruaguayo = new Uruguayo();
$uruaguayo->saludolatinoamericano();
echo "<br>";
$uruaguayo->saludoamericano();
echo "<br>";
$uruaguayo->saludar();
echo "<br>";
echo "<br>";

$paraguayo = new Paraguayo();
$paraguayo->imprimirMensaje();

echo "<br>";
echo "<br>";

$chileno = new Chileno;
$chileno->codificandoSaludos();