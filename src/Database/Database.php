<?php

namespace App\Database;
use App\Form;
use mysqli;
use mysqli_sql_exception;

class Database
{
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "aaammsn1433";
    private string $dataBaseName = "userlogin";
    private Form $form;

    public function __construct(Form $form)
    {
        $this->form = $form;
    }

    private function connectTODataBase(): ?mysqli
    {
        return new mysqli($this->servername,$this->username,$this->password,$this->dataBaseName);
    }

    public function addNewUser(){
        try {
            $conn = $this->connectTODataBase();
            $sql = "INSERT INTO user (
                  user_name,first_name,last_name,birth_day,nationality,
                  address,email,mobile,login_password
                  ) value (?,?,?,?,?,?,?,?,?);";
            $stmt = $conn->prepare($sql);
            $userName = $this->form->getUserName();
            $firstName = $this->form->getFirstName();
            $lastName = $this->form->getLastName();
            $birthDate = $this->form->getBirthDate();
            $nationality = $this->form->getNationality();
            $address = $this->form->getAddress();
            $email = $this->form->getEmail();
            $mobileNumber = $this->form->getMobileNumber();
            $password = $this->form->getPassword();

            $stmt->bind_param("sssssssss",
                $userName,
                $firstName,
                $lastName,
                $birthDate,
                $nationality,
                $address,
                $email,
                $mobileNumber,
                $password
            );

            if ($stmt->execute() === TRUE){
                return 'added';
            }else{
                return "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        catch (mysqli_sql_exception $exception){
            echo 'ERROR';
        }
    }
}