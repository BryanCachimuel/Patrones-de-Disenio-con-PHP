<?php

class Frutas {

    /* propiedad estática */
    public static $exoticas = "tocte";
    public static $frutosSeco = "pistacho";

    public function frutasCitricas(){
        echo "La naranja y mandarina son frutas citricas";
    }

    /* un  método estático no necesita que se instancie una clase para acceder a este método */
    public static function frutasDulces(){
        echo "La manzana y la pera son frutas dulces";
    }

    public function frutasExoticas(){
        /* no se puede usar la palabra this ya que hace referencia de acceso a una 
         propiedad de la clase que puede ser instaciada y accedida por un objeto */
        //echo "Ejemplo de fruta exótica: " . $this->exoticas; 

        /* para acceder a la variable estatica se debe utilizar self y con ello se acceder al valor
        de esa variable */
        echo "Ejemplo de fruta exótica: " . self::$exoticas;
    }
}

class FrutosSecos extends Frutas {
    public function frutosSecosExoticos(){
        /* para acceder a una variable estatica de otra clase se pone parent */
        echo "Ejemplo de fruto seco: " . parent::$frutosSeco;
    }
}

$frutas = new Frutas;
$frutas->frutasCitricas();

echo "<br>";
$frutas->frutasExoticas();

echo "<br>";
/* se accede al método estático sin hacer una instancia de la clase */
Frutas::frutasDulces();

echo "<br>";
echo Frutas::$exoticas;

echo "<br>";
$frutoSeco = new FrutosSecos;
$frutoSeco->frutosSecosExoticos();