<?php

namespace App\patrones\creacionales\abstractFactory\contracts;

interface PaymentValidator {

    public function validatePayment(string $transactionId): void;

}