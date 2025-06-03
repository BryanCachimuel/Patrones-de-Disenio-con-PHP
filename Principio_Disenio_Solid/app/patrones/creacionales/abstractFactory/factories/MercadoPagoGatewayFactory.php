<?php

namespace App\patrones\creacionales\abstractFactory\factories;

use App\patrones\creacionales\abstractFactory\contracts\PaymentAuthenticator;
use App\patrones\creacionales\abstractFactory\contracts\PaymentProcessor;
use App\patrones\creacionales\abstractFactory\contracts\PaymentValidator;
use App\patrones\creacionales\abstractFactory\mercadopago\MercadoPagoAuthenticator;
use App\patrones\creacionales\abstractFactory\mercadopago\MercadoPagoProcessor;
use App\patrones\creacionales\abstractFactory\mercadopago\MercadoPagoValidator;

class MercadoPagoGatewayFactory implements PaymentGatewayFactory {

    public function createAuthenticator(): PaymentAuthenticator {
        return new MercadoPagoAuthenticator();
    }

    public function createProcessor(): PaymentProcessor {
        return new MercadoPagoProcessor();
    }

    public function createValidator(): PaymentValidator {
        return new MercadoPagoValidator();
    }

}