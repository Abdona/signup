<?php

use App\Routing\Routing;

require_once realpath('../vendor/autoload.php') ;

$route = new Routing();

echo $_SERVER['REQUEST_URI'];

if (isset($_SERVER['REQUEST_URI']))
    $route->route($_SERVER['REQUEST_URI']);

