<?php

namespace App\Database;
use App\Form\Form;
use mysqli;
use mysqli_sql_exception;

class Database
{
    private string $servername;
    private string $username;
    private string $password;
    private string $dataBaseName;
    private array $config;

    public function __construct()
    {
        $this->config = parse_ini_file(__DIR__.'\..\..\config.ini',true);
        $this->servername = $this->config["dataBase"]["server"];
        $this->username = $this->config["dataBase"]['username'];
        $this->password = $this->config["dataBase"]['password'];
        $this->dataBaseName = $this->config["dataBase"]['dataBaseName'];
    }

    private function connectTODataBase(): ?mysqli
    {
        return new mysqli($this->servername,$this->username,$this->password,$this->dataBaseName);
    }

    public function addNewUser(Form $form){
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
            return true;
        }else{
            return "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    public function login (string $userName, string $password): bool
    {
        $conn = $this->connectTODataBase();
        $sql = "SELECT * FROM user WHERE user_name = ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $userName);

        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if($user !== null && $user['login_password'] === $password )
        {
            return true;
        }else
            return false;
    }

    public function checkUser (string $userName):bool {
        $conn = $this->connectTODataBase();
        $sql = "SELECT * FROM user WHERE user_name = ?;";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $userName);

        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user !== null)
        {
            return true;
        }
        return false;
    }
}