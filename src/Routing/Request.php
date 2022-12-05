<?php

namespace App\Routing;

class Request
{
    private array $formInputs;

    public function __construct(array $formInputs)
    {
        $this->formInputs = $formInputs;
    }

    public function toJson () {

    }

    public function getFormInputs(): array
    {
        return $this->formInputs;
    }

    public function setFormInputs(array $formInputs): void
    {
        $this->formInputs = $formInputs;
    }



}