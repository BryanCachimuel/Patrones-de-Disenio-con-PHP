<?php

namespace App\patrones\creacionales\abstractFactory\mercadopago;

use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;

class MercadoPagoProcessor implements PaymentProcessor{

    public function initiatePayment(float $amount): void {
        echo "Iniciando pago de {$amount} con Mercado Pago <br>";
    }

}