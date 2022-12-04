<?php

namespace App\Database;
use mysqli;
use mysqli_sql_exception;

class Database
{
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "aaammsn1433";
    private string $dataBaseName = "userlogin";

    private function connectTODataBaser(): ?mysqli
    {
        return new mysqli($this->servername,'root',$this->password,$this->dataBaseName);
    }

    public function addNewUser(){
        try {
            $conn = $this->connectTODataBaser();
            $sql = "INSERT INTO user (
                  user_name,first_name,last_name,birth_day,nationality,
                  address,email,mobile,login_password
                  ) value ('ahmedhima','ahmed','naser','28/05/3333','egyptian',
                            'am gleisdreieck 10a','safsdgsdg@gmail.com',
                            '235235325235','asff@Qsdsdgdg');";
            if ($conn->query($sql) === TRUE){
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