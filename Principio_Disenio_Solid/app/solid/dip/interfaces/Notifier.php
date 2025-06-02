<?php

namespace App\solid\dip\interfaces;

use App\solid\dip\User;

interface Notifier {

    public function send(User $user, string $mensaje): void;

}