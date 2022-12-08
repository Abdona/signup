<?php

namespace App;

class Session
{
    private array $session;

    public function __construct()
    {
        $this->session = [];
    }

    public function addToSession($key,$value): void
    {
        $this->session[$key] = $value;
    }

    public function getSession(): array {
        return $this->session;
    }
}