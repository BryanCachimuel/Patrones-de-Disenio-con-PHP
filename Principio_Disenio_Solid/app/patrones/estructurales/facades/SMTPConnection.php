<?php

namespace App\patrones\estructurales\facades;

class SMTPConnection {

    private string $connection;

    public function __construct() {
        echo "SMTP: Conectado al servidor <br>";
    }

    public function authenticate(string $username, string $password): void {
        echo "SMTP: Autenticando con usuario $username <br>";
        $this->connection = 'smtp_connection';
    }

    public function getConnection(): string {
        return $this->connection;
    }

}