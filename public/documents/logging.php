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
            <input name="requestType" value="loggin" hidden>
        </label>
        <label>
            <input type="text"  name="username">
        </label>
        <label for="password">
            <input type="password" name="password">
        </label>
            <button name="type" value="/formAction">anmelden</button>
            <button name="type" value="return">zurück</button>
    </form>
</nav>
<p>
    Bitte Geben Sie Ihre Benutzer Name und Passwort ein.
</p>
</body>
</html>
