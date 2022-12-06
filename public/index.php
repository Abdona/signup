<?php

use App\Database\Database;
use App\Routing\Routing;

require_once realpath('../vendor/autoload.php') ;

$route = new Routing();

if (isset($_REQUEST['type']))
    $route->route($_REQUEST['type']);
else
    $route->route('');
