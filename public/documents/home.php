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
        <button name="type" value="/login">Log In</button>
        <button name="type" value="/signup">Sign Up</button>
    </form>
</nav>
<p>
    Bitte Loggen Sie sich ein oder legen Sie ein neus Konto an.
</p>
</body>
</html>

<?php

require_once realpath('../../vendor/autoload.php') ;
use App\Routing\Routing;

if(isset($_POST['submit'])){
    $route = new Routing();
    $route->route($_POST['type']);
}