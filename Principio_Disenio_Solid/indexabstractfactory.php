<?php

use App\patrones\creacionales\abstractFactory\factories\MercadoPagoGatewayFactory;
use App\patrones\creacionales\abstractFactory\factories\PayPalGatewayFactory;

require __DIR__ . "/vendor/autoload.php";

$gatewayFactory = new MercadoPagoGatewayFactory();

$paymentAuthenticator = $gatewayFactory->createAuthenticator();
$paymentProcessor = $gatewayFactory->createProcessor();
$paymentValidator = $gatewayFactory->createValidator();

$paymentAuthenticator->authenticate();
$paymentProcessor->initiatePayment(100.00);
$paymentValidator->validatePayment('p123j');