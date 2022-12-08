<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/home.css">
    <meta charset="UTF-8">
    <title>HomePage</title>
</head>
<body>
<div>
    <form action="../index.php" method="post">
        <label>
            <input name="submit" value="true" hidden>
        </label>
        <ul class="list">
            <li>
                <button name="type" value="/login">Log In</button>
            </li>
            <li>
                <button name="type" value="/signup">Sign Up</button>
            </li>
        </ul>
    </form>
</div>
<p>
    Bitte Loggen Sie sich ein oder legen Sie ein neus Konto an.
</p>
</body>
</html>