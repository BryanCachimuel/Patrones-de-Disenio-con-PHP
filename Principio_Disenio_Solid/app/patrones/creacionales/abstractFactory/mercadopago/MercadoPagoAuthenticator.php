<?php

namespace App\patrones\creacionales\abstractFactory\mercadopago;

use App\patrones\creacionales\abstractFactory\contracts\PaymentAuthenticator;

class MercadoPagoAuthenticator implements PaymentAuthenticator{
    
    public function authenticate(): void {
        echo "Autenticando con Mercado Pago <br>";
    }

}