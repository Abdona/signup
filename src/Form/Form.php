<?php

namespace App\Form;

class Form
{
    private string $userName;
    private string $firstName;
    private string $lastName;
    private string $nationality;
    private string $email;
    private string $mobileNumber;
    private string $password;
    private string $birthDate;
    private string $address;

    public function setForm (
        $userName,
        $firstName,
        $lastName,
        $nationality,
        $email,
        $mobileNumber,
        $password,
        $birthDate,
        $address
    ): void
    {
        $this->userName = $userName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->nationality = $nationality;
        $this->email = $email;
        $this->mobileNumber = $mobileNumber;
        $this->password = $password;
        $this->birthDate = $birthDate;
        $this->address = $address;
    }

    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getNationality(): string
    {
        return $this->nationality;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getMobileNumber(): string
    {
        return $this->mobileNumber;
    }

    public function getPassword(): string
    {
        return $this->password;
    }
}