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
        <label for="username">
            <input type="text"  name="username" value="username">
        </label>
        <label for="password">
            <input type="password" name="password" value="password">
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
use App\Routing\Routing;

if(isset($_POST['submit'])){
    if ($_POST['type'] === 'return'){
        $route = new Routing();
        $route->route('');
    }
}
