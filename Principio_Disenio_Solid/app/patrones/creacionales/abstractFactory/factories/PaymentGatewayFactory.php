<?php

namespace App\patrones\creacionales\abstractFactory\factories;

use App\patrones\creacionales\abstractFactory\contracts\PaymentAuthenticator;
use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;
use App\patrones\creacionales\abstractFactory\contracts\PaymentValidator;

interface PaymentGatewayFactory {

    public function createAuthenticator(): PaymentAuthenticator;
    public function createProcessor(): PaymentProcessor;
    public function createValidator(): PaymentValidator;
    
}