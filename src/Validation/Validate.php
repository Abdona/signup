<?php
declare(strict_types=1);

namespace App\Validation;

use App\Form;

class Validate
{
    private Form $form;

    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    public function validate ():bool
    {
        $formCheck = false;
        $formCheck = $this->validateUserName();
        $formCheck = $this->validateFirstName();
        $formCheck = $this->validateLastName();
        $formCheck = $this->validateNationalityName();
        $formCheck = $this->validateEmail();
        $formCheck = $this->validateMobileNumber();
        $formCheck = $this->validatePassword();

        return $formCheck;
    }

    private function validateUserName():bool
    {
        if($this->form->getUserName() !== ""){
            return true;
        }
        return false;
    }

    private function validateFirstName():bool
    {
        if($this->form->getFirstName() !== ""){
            return true;
        }
        return false;
    }

    private function validateLastName():bool
    {
        if($this->form->getLastName() !== ""){
            return true;
        }
        return false;
    }

    private function validateNationalityName():bool
    {
        if($this->form->getNationality() !== ""){
            return true;
        }
        return false;
    }

    private function validateEmail():bool
    {
        if($this->form->getEmail() !== ""){
            return true;
        }
        return false;
    }

    private function validateMobileNumber():bool
    {
        if($this->form->getMobileNumber() !== ""){
            return true;
        }
        return false;
    }

    private function validatePassword():bool
    {
        if($this->form->getPassword() !== ""){
            return true;
        }
        return false;
    }
}