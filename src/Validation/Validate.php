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
        return $this->message;
    }

    private function validateUserName(): void
    {
        if (
            $this->form->getUserName() === "" ||
            strlen($this->form->getUserName()) < 3 ||
            false === preg_match("/^[a-zA-Z].*/", $this->form->getUserName())
        ) {
            $this->message->pushMessage('user name', false);
        }
    }

    private function validateFirstName(): void
    {
        if (
            $this->form->getUserName() === "" ||
            strlen($this->form->getUserName()) < 3 ||
            false === preg_match("/^[a-zA-Z]*$/", $this->form->getFirstName())
        ) {
            $this->message->pushMessage('first name', false);
        }
    }

    private function validateLastName(): void
    {
        if (
            $this->form->getUserName() === "" ||
            strlen($this->form->getUserName()) < 3 ||
            false === preg_match("/^[a-zA-Z]*$/", $this->form->getLastName())
        ) {
            $this->message->pushMessage('last name', false);
        }
    }

    private function validateNationality(): void
    {
        if (
            $this->form->getUserName() === "" ||
            strlen($this->form->getUserName()) < 3 ||
            false === preg_match("/^[a-zA-Z]*$/", $this->form->getFirstName())
        ) {
            $this->message->pushMessage('nationality', false);
        }
    }

    private function validateEmail(): void
    {
        if (
            $this->form->getUserName() === "" ||
            false === preg_match("/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/", $this->form->getFirstName())
        ) {
            $this->message->pushMessage('Email', false);
        }
    }

    private function validateMobileNumber(): void
    {
        if (
            $this->form->getUserName() === "" ||
            strlen($this->form->getUserName()) < 10 || strlen($this->form->getUserName()) > 10 ||
            false === preg_match("/^[0-9]*$/", $this->form->getFirstName())
        ) {
            $this->message->pushMessage('Phone Number', false);
        }
    }

    private function validatePassword(): void
    {
        if (
            $this->form->getUserName() === "" ||
            strlen($this->form->getUserName()) < 10 || strlen($this->form->getUserName()) > 10 ||
            false === preg_match
            (
                "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/",
                $this->form->getFirstName()
            )
        ) {
            $this->message->pushMessage('Password', false);
        }
    }
}