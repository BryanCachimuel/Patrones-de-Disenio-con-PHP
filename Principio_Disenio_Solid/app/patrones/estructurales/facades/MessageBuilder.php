<?php

namespace App\patrones\estructurales\facades;

class MessageBuilder {

    private $content;

    public function getContent(): string {
        return $this->content;
    }

    public function setContent(string $content): void {
        $this->content = $content;
    }

    

}