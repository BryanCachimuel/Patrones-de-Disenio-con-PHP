<?php

namespace App\patrones\creacionales\builder;

class User {
    
    private ?string $name = null;

    private ?string $address = null;
    private ?string $phone  = null;

    private ?string $email  = null;
    private ?string $password  = null;

    public function __construct(?string $name, ?string $address, ?string $phone, ?string $email, ?string $password) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
    }

    public function getName(): ?string {
        return $this->name;
    }

    public function getAddress(): ?string {
        return $this->address;
    }

    public function getPhone(): ?string {
        return $this->phone;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

}