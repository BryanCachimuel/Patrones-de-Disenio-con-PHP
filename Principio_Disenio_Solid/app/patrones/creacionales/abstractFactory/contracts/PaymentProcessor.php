<?php

namespace App\patrones\creacionales\abstractFactory\contracts;

interface PaymentProcessor {

    public function initiatePayment(float $amount): void;

}