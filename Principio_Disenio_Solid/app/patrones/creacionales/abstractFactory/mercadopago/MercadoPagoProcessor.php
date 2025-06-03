<?php

namespace App\patrones\creacionales\abstractFactory\mercadopago;

use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;

class MercadoPagoProcessor implements PaymentProcessor{

    public function initiatePayment(float $amount): string {
        return "Iniciando pago de {$amount} con Mercado Pago";
    }

}