<?php

class MyClass {
    
    /* tipos de propiedades public, protected y private (estas son las formas de encapsulamiento)*/
    public $publico = "Publica";
    protected $protegido = "Protegida";
    private $privado = "Privada";

    function imprimirMensaje(){
        echo $this->publico . "<br>";
        echo $this->protegido . "<br>";
        echo $this->privado . "<br>";
    } 
}

class MyClass2 extends MyClass {

    public $publico = "Publico 2";
    protected $protegido = "Protegido 2";

    /* 
        sobreescribiendo el método de la clase padre 
        
        Regla 1: La propiedad protegodo puede ser accedida desde su propia clase oasta de su clase hija
        Regla 2: La propiedad privado no puede ser accedida desde sus clases hijas ya que es privada
    */
    function imprimirMensaje(){
        echo $this->publico . "<br>";
        echo $this->protegido . "<br>";
        echo $this->privado . "<br>";
    }
}

/* creando objetos de clase */
$objeto = new MyClass;

echo $objeto->publico;
echo "<br>";
/*
estas dos propiedades no pueden ser accedidas
echo $objeto->protegido;
echo "<br>";
echo $objeto->privado;
echo "<br>";
*/

/* está es la unica forma de acceder a las propiedades protegida y privada, a travez de un método */
$objeto->imprimirMensaje();

$objeto2 = new MyClass2;
$objeto2->imprimirMensaje();