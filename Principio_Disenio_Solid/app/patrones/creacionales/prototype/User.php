<?php

namespace App\patrones\creacionales\prototype;

class User implements Clonable{
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

    public function clone(): Clonable {
        return new User($this->name, $this->email);
    }

}

