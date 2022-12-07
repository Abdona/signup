<?php
declare(strict_types=1);

namespace App\Validation;


use App\Form\Form;

class Validate
{

    private Form $form;
    private ValidationCollection $message;

    public function __construct(Form $form, ValidationCollection $message)
    {
        $this->form = $form;
        $this->message = $message;
    }

    public function validate(): ValidationCollection
    {
        $this->validateUserName();
        $this->validateFirstName();
        $this->validateLastName();
        $this->validateNationality();
        $this->validateEmail();
        $this->validateMobileNumber();
        $this->validatePassword();
        return $this->message;
    }

    private function validateUserName(): void
    {
        if (
            0 === preg_match("/^[a-zA-Z].{3,}/", $this->form->getUserName())
        ) {
            $this->message->pushMessage('user name', false);
        }
    }

    private function validateFirstName(): void
    {
        if (
            0 === preg_match("/^[a-zA-Z]{3,}$/", $this->form->getFirstName())
        ) {
            $this->message->pushMessage('first name', false);
        }
    }

    private function validateLastName(): void
    {
        if (
            0 === preg_match("/^[a-zA-Z]{3,}$/", $this->form->getLastName())
        ) {
            $this->message->pushMessage('last name', false);
        }
    }

    private function validateNationality(): void
    {
        if (
            0 === preg_match("/^[a-zA-Z]{3,}$/", $this->form->getNationality())
        ) {
            $this->message->pushMessage('nationality', false);
        }
    }

    private function validateEmail(): void
    {
        if (
            0 === preg_match("/^[\w\-\.]+@([\w\-]+\.)+[\w\-]{2,4}$/", $this->form->getEmail())
        ) {
            $this->message->pushMessage('Email', false);
        }
    }

    private function validateMobileNumber(): void
    {
        if (
            0 === preg_match("/^[0-9]{8,}$/", $this->form->getMobileNumber())
        ) {
            $this->message->pushMessage('Phone Number', false);
        }
    }

    private function validatePassword(): void
    {
        if (0 === preg_match
            (
                "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",
                $this->form->getPassword()
            )
        ) {
            $this->message->pushMessage('Password', false);
        }
    }
}