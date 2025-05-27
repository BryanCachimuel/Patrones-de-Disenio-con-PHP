<?php

/* 
interfaz que cuenta con un método abstracto y obligan a los desarrolladores
a trabajar con una estructura fija en las clases donde se desea implementar las
interfaces 
*/

interface a {
    public function imprimir();
}

interface b {
     public function imprimir2();
}

/* se puede aplicar herencia multiple dentro de las interfaces */
interface c extends a,b{
    public function imprimir3();
}

/* 
debido a la herencia aplicada en la interface c se aplica la implementación en la clase
d y por ende se hace necesario tener los tres métodos dentro de esta clase 
*/

class d implements c{
    public function imprimir(){}
    public function imprimir2(){}
    public function imprimir3(){}

    // métodos propios de la clase d
    public function imprimir4(){}
    public function imprimir5(){}
}

