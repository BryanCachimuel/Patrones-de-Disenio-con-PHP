<?php

namespace App\patrones\creacionales\abstractFactory\paypal;

use App\patrones\creacionales\abstractFactory\contracts\PaymentValidator;

class PayPalValidator implements PaymentValidator{

    public function validatePayment(string $transactionId): void {
        echo "Validando pago con Paypal para la transacción {$transactionId}";
    }

}