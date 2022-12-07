<?php

namespace App\Validation;

use Iterator;
use ReturnTypeWillChange;

class ValidationCollection implements Iterator
{
    private array $message;
    private int $pointer;
    public function __construct(array $message = [], int $pointer = 0)
    {
        $this->message = $message;
        $this->pointer = $pointer;
    }

    public function pushMessage(string $key,bool $value)
    {
        $this->message[$key] = $value;
    }

    public function getMessageLength(): int
    {
        return count($this->message);
    }

    public function current(): mixed
    {
        return $this->message[$this->pointer];
    }

    public function next(): void
    {
        $this->pointer ++;
    }

    #[ReturnTypeWillChange] public function key()
    {
        return $this->pointer;
    }

    public function valid(): bool
    {
        return isset($this->message[$this->pointer]);
    }

    public function rewind(): void
    {
        $this->pointer = 0 ;
    }
}