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
        <div>
            <label for="user_name">Benutzer Name: </label><input type="text" id="user_name" name="user_name" value="">
            <label for="first_name">Vorname: </label><input type="text" id="first_name" name="first_name">
            <label for="last_name">Nachname: </label><input type="text" id="last_name" name="last_name">
            <br>
            <br>
            <label for="password">Passwort: </label><input type="password" id="password" name="password">
            <label for="nationality">Nationality: </label><input type="text" id="nationality" name="nationality">
            <label for="email">Email: </label><input type="email" id="email" name="email">
            <label for="mobile">Hand Nummber: </label><input type="number" id="mobile" name="mobile">
            <br>
            <br>
            <label for="address">Anschrift: </label><input type="text" id="address" name="address">
            <label for="birth_date">Geburts Datum: </label><input type="month" id="birth_date" name="birth_date">
        </div>
        <br>
        <br>
        <button name="type" value="login">anmelden</button>
        <button name="type" value="return">zurück</button>
    </form>
</nav>
</body>
</html>
<?php

require_once realpath('../../vendor/autoload.php') ;

use App\Form;
use App\Routing\Request;
use App\Routing\Routing;
use App\Database\Database;

if(isset($_POST['submit'])){
    $req = new Request($_POST);
    $route = new Routing();
    if ($_POST['type'] === 'return'){
        $route->route('');
    }
    $form = new Form
    (
            $_POST['user_name'],
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['nationality'],
            $_POST['email'],
            $_POST['mobile'],
            $_POST['password'],
            $_POST['birth_date'],
            $_POST['address']
    );
    $db = new Database();
    $db->addNewUser($form);
    $route->route('/loginSuccessfully');
}
