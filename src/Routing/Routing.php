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
            case 'return':
                header('Location:'. '/documents/home.php');
                break;
            case '/login':
                header('Location:'. '/documents/logging.php');
                break;
            case '/signup':
                header('Location:'. '/documents/signup.php');
                break;
            case '/signup_success':
                header('Location:'. '/documents/signup_success.php');
                break;
            case '/signup_failed':
                header('Location:'. '/documents/signup_failed.php');
                break;
            case '/login_successfully':
                header('Location:'. '/documents/login_success.php');
                break;
            case '/login_failed':
                header('Location:'. '/documents/login_failed.php');
                break;
            case '/formAction':
                $formAction = new FormAction;
                $formAction();
        }
    }
}