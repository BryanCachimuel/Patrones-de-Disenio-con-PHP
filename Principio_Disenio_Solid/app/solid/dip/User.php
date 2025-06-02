<?php

namespace App\solid\dip;

class User {
    private string $name;
    private string $email;
    private string $phone;

    public function __construct(string $name, string $email, string $phone){
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
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
    
    public function getPhone():string{
        return $this->phone;
    }

    public function setPhone(string $phone): void{
        $this->phone = $phone;
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

