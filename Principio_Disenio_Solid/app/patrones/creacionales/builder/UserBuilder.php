<?php

namespace App\patrones\creacionales\builder;

class UserBuilder {

    // se pone el signo de interrogación delante del tipo de dato para que la variable acepte valores nulos

    private ?string $name = null;

    private ?string $address = null;
    private ?string $phone  = null;

    private ?string $email  = null;
    private ?string $password  = null;

    public function setName(string $name): self {
        $this->name = $name;
        return $this;
    }

    public function setAddress(string $address): self {
        $this->address = $address;
        return $this;
    }

    public function setPhone(string $phone): self {
        $this->phone = $phone;
        return $this;
    }

    public function setEmail(string $email): self {
        $this->email = $email;
        return $this;
    }

    public function setPassword(string $password): self {
        $this->password = $password;
        return $this;
    }

    // método que retorna una instancia de la clase User
    public function build(): User {
        return new User(
            $this->name,
            $this->address,
            $this->phone,
            $this->email,
            $this->password
        );
    }

}