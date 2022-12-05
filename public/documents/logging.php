<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomePage</title>
</head>
<body>
<nav>
    <form action="#" method="post">
        <label>
            <input name="submit" value="true" hidden>
        </label>
        <label>
            <input type="text"  name="username">
        </label>
        <label for="password">
            <input type="password" name="password">
        </label>
            <button name="type" value="login">anmelden</button>
            <button name="type" value="return">zurück</button>
    </form>
</nav>
<p>
    Bitte Geben Sie Ihre Daten ein.
</p>
</body>
</html>
<?php

require_once realpath('../../vendor/autoload.php') ;

use App\Database\Database;
use App\Form;
use App\Routing\Routing;

if(isset($_POST['submit'])){
    $route = new Routing();
    $db = new Database();
    if ($_POST['type'] === 'return'){
        $route->route('');
    }

    $db->getUser($_POST['username'], $_POST['password']);
}
