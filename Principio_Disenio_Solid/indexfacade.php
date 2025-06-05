<?php

use App\patrones\estructurales\facades\MailerFacade;
use App\patrones\estructurales\facades\MailSender;
use App\patrones\estructurales\facades\MessageBuilder;
use App\patrones\estructurales\facades\SMTPConnection;

require __DIR__ . "/vendor/autoload.php";

/*$connection = new SMTPConnection();
$connection->authenticate('programadores','123456789');

$message = new MessageBuilder();
$message->setContent('Esté es un mensaje de prueba');

$mailSender = new MailSender();
$mailSender->send($connection, $message); */

$mailer = new MailerFacade();
$mailer->send('programadores','123456789','Esté es un mensaje de prueba');
