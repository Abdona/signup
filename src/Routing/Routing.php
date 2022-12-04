<?php

namespace App\Routing;

class Routing
{
    public function route (string $url)
    {
        switch ($url){
            case '':
            case '/':
                header('Location:'. '/documents/home.php');
                break;
            case '/login':
                header('Location:'. '/documents/logging.php');
                break;
            case '/signup':
                header('Location:'. '/documents/signup.php');
                break;
        }
    }
}