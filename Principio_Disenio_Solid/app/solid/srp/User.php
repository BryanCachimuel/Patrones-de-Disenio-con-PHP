<?php

/* srp -> principio de responsabilidad unica */

namespace App\solid\srp;

/* 
    Esta clase tiene 3 responsabilidades y eso incumple con su principio
    así que estos scripts se dividen en 3 clases para cumplir con el proposito
    de la responsailidad única
*/

class User {
    private string $name;
    private string $email;

    public function __construct(string $name, string $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function getName():string{
        return $this->name;
    }

    public function setName(string $name): void{
        $this->name = $name;
    }  

    public function getEmail():string{
        return $this->email;
    }
    
     public function setEmail(string $email): void{
        $this->email = $email;
    }  

    /*
    Este método se traslada a la clase de UserRepository

    public function save(): void {
        echo"Guardando usuario {$this->name} en la base de datos. </br>";
    }

    este método se traslada a la clase de EmailService

    public function sendEmail(): void {
        echo "Enviando correo {$this->email}. </br>";
    }
    */

}

