<?php

namespace App\patrones\creacionales\abstractFactory\contracts;

interface PaymentAuthenticator {
    public function authenticate(): void;
}