<?php

namespace App;

class Form
{
    private string $userName;
    private string $firstName;
    private string $lastName;
    private string $nationality;
    private string $email;
    private string $mobileNumber;
    private string $password;
    private string $dayOfBirth;
    private string $monthOfBirth;
    private string $yearOfBirth;

    public function __construct(
        string $userName,
        string $firstName,
        string $lastName,
        string $nationality,
        string $email,
        string $mobileNumber,
        string $password,
        string $dayOfBirth,
        string $monthOfBirth,
        string $yearOfBirth

    )
    {
        $this->userName = $userName;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->nationality = $nationality;
        $this->email = $email;
        $this->mobileNumber = $mobileNumber;
        $this->password = $password;
        $this->dayOfBirth = $dayOfBirth;
        $this->monthOfBirth = $monthOfBirth;
        $this->yearOfBirth = $yearOfBirth;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getNationality(): string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): void
    {
        $this->nationality = $nationality;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getMobileNumber(): string
    {
        return $this->mobileNumber;
    }

    public function setMobileNumber(string $mobileNumber): void
    {
        $this->mobileNumber = $mobileNumber;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getDayOfBirth(): string
    {
        return $this->dayOfBirth;
    }

    public function setDayOfBirth(string $dayOfBirth): void
    {
        $this->dayOfBirth = $dayOfBirth;
    }

    public function getMonthOfBirth(): string
    {
        return $this->monthOfBirth;
    }

    public function setMonthOfBirth(string $monthOfBirth): void
    {
        $this->monthOfBirth = $monthOfBirth;
    }

    public function getYearOfBirth(): string
    {
        return $this->yearOfBirth;
    }

    public function setYearOfBirth(string $yearOfBirth): void
    {
        $this->yearOfBirth = $yearOfBirth;
    }
}