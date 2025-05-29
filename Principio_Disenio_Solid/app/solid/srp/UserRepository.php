<?php

/* esta clase se crea para todo lo que 
tenga que ver con persistencia o almacenamiento en la base de datos */
namespace App\solid\srp;

use App\solid\srp\User;

class UserRepository {

    public function save(User $user): void {
        echo"Guardando usuario {$user->getName()} en la base de datos. </br>";
    }

    // Buscar por id

    // Actualizar

    // Eliminar

}