<?php
/*
    Una clase abstracta es una clase que cuenta con al menos un método abstracto.
    Los métodos abstractos solo pueden tener nombres y argumentos. 
    Por lo tanto, no podemos crear objetos a partir de clases abstractas.
*/
abstract class ClaseAbstracta {
    abstract protected function getValor();
    abstract public function valorPrefijo($prefijo);

    public function imprimir(){
        echo $this->getValor();
    }
}

/* las clases abrstractas son invocadas para las clases mediante extends */
class ClaseConcreta extends ClaseAbstracta {

    protected function getValor(){
        return "Clase concreta";
    }

    public function valorPrefijo($prefijo, $separador = "."){
        return $prefijo . "Clase concreta";
    }

}

$clase1 = new ClaseConcreta;
$clase1->imprimir();
echo "<br>";

echo $clase1->valorPrefijo("Impresión del método valorPrefijo");
