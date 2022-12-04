<?php

namespace App\Routing;

class Routing
{
    public function route (string $url)
    {
        switch ($url){
            case '':
            case '/':
                require __DIR__ . '\..\..\documents\index.php';
                break;
        }
    }
}