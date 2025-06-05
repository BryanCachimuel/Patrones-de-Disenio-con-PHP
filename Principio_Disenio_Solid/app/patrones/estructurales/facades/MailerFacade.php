<?php 

namespace App\patrones\estructurales\facades;

class MailerFacade {

    private SMTPConnection $connection;
    private MessageBuilder $message;
    private MailSender $mailSender;

    public function __construct() {
        $this->connection = new SMTPConnection();
        $this->message = new MessageBuilder();
        $this->mailSender = new MailSender();
    }

    public function send(string $username, string $password, string $content):void {
        $this->connection->authenticate($username, $password);
        $this->message->setContent($content);
        $this->mailSender->send($this->connection, $this->message);
    }

}