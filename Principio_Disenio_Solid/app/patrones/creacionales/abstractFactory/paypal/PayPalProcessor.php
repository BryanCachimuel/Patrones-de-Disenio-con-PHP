<?php

namespace App\patrones\creacionales\abstractFactory\paypal;

use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;

class PayPalProcessor implements PaymentProcessor{

    public function initiatePayment(float $amount): string {
        return "Iniciando pago de {$amount} con Paypal";
    }

}