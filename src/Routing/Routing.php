<?php

namespace App\Routing;


use App\Form\FormAction;

class Routing
{
    public function route (string $url): void
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
            case '/loginSuccessfully':
                header('Location:'. '/documents/logginSuccess.php');
                break;
            case '/formAction':
                $formAction = new FormAction;
                $formAction();
        }
    }
}