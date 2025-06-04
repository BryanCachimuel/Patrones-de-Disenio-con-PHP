<?php

namespace App\patrones\creacionales\abstractFactory\mercadopago;

use App\patrones\creacionales\abstractFactory\contracts\PaymentValidator;

class MercadoPagoValidator implements PaymentValidator{

    public function validatePayment(string $transactionId): void {
        echo "Validando pago con Mercado Pago para la transacción {$transactionId} <br>";
    }

}