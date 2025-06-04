<?php

namespace App\patrones\creacionales\abstractFactory\paypal;

use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;

class PayPalProcessor implements PaymentProcessor{

    public function initiatePayment(float $amount): void {
        echo "Iniciando pago de {$amount} con Paypal <br>";
    }

}