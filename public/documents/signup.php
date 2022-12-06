<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HomePage</title>
</head>
<body>
<nav>
    <form action="../index.php" method="post">
        <label>
            <input name="requestType" value="signup" hidden>
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
        <button name="type" value="/formAction">anmelden</button>
        <button name="type" value="return">zurück</button>
    </form>
</nav>
</body>
</html>