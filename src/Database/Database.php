<?php

namespace App\Database;
use App\Form\Form;
use mysqli;
use mysqli_sql_exception;

class Database
{
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "aaammsn1433";
    private string $dataBaseName = "userlogin";


    private function connectTODataBase(): ?mysqli
    {
        return new mysqli($this->servername,$this->username,$this->password,$this->dataBaseName);
    }

    public function addNewUser(Form $form){
        try {
            $conn = $this->connectTODataBase();
            $sql = "INSERT INTO user (
                  user_name,first_name,last_name,birth_day,nationality,
                  address,email,mobile,login_password
                  ) value (?,?,?,?,?,?,?,?,?);";
            $stmt = $conn->prepare($sql);
            $userName = $form->getUserName();
            $firstName = $form->getFirstName();
            $lastName = $form->getLastName();
            $birthDate = $form->getBirthDate();
            $nationality = $form->getNationality();
            $address = $form->getAddress();
            $email = $form->getEmail();
            $mobileNumber = $form->getMobileNumber();
            $password = $form->getPassword();

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
            echo 'ERROR: '.$exception;
        }
    }

    public function getUser (string $userName, string $password):void
    {
        $conn = $this->connectTODataBase();
        $sql = "SELECT * FROM user WHERE user_name = ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $userName);

        try {
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if($user !== null && $user['login_password'] === $password ){
                echo 'login sucess';
            }else
                echo 'login failed';
            }
        catch (mysqli_sql_exception $exception)
        {
            echo 'ERROR';
        }

    }
}