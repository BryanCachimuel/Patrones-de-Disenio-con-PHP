<?php

namespace App\patrones\creacionales\abstractFactory\paypal;

use App\patrones\creacionales\abstractFactory\contracts\PaymentAuthenticator;

class PayPalAuthenticator implements PaymentAuthenticator{
    
    public function authenticate(): string {
        return "Autenticando con Paypal";
    }

}