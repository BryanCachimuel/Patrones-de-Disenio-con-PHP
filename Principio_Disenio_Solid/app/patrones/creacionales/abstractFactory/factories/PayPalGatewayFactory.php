<?php

namespace App\patrones\creacionales\abstractFactory\factories;

use App\patrones\creacionales\abstractFactory\contracts\PaymentAuthenticator;
use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;
use App\patrones\creacionales\abstractFactory\contracts\PaymentValidator;
use App\patrones\creacionales\abstractFactory\paypal\PayPalAuthenticator;
use App\patrones\creacionales\abstractFactory\paypal\PayPalProcessor;
use App\patrones\creacionales\abstractFactory\paypal\PayPalValidator;

class PayPalGatewayFactory implements PaymentGatewayFactory {

    public function createAuthenticator(): PaymentAuthenticator {
        return new PayPalAuthenticator();
    }

    public function createProcessor(): PaymentProcessor {
        return new PayPalProcessor();
    }

    public function createValidator(): PaymentValidator {
        return new PayPalValidator();
    }

}