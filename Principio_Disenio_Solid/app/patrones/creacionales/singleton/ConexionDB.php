<?php

namespace App\patrones\creacionales\singleton;

class ConexionDB {

    // para decir que esta varaible puede aceptar valores nulos se pone el simbolo 
    // ? delante del nombre de la clase
    private static ?ConexionDB $instance = null;

    private function __construct(){
        echo "Conectando a la base de datos <br>";
    }

    // método encargado de realizar las instancias a la base de datos
    public static function getInstance(): ConexionDB {
       if(self::$instance == null) {
         self::$instance = new ConexionDB();
       }
        return self::$instance;
    }

    public function query(string $sql):void {
        echo "Ejecutando consulta: $sql <br>";
    }
}