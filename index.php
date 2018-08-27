<?php
if (!empty($_POST['login'])) {
    setcookie('login', $_POST['login'], time() + 365 * 24 * 3600, null, null, false);
}
if (!empty($_POST['password'])) {
    setcookie('password', $_POST['password'], time() + 365 * 24 * 3600, null, null, false);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Exercice 3/8</title>
    </head>
    <body>
        <form action="index.php" method="POST">
            <label for="login">Identifiant</label>
            <input type="text" name="login" id="login" placeholder="Identifiant" />
            <label for="password">Mot de passe</label>
            <input type="text" name="password" id="password" placeholder="Mot de passe"/>
            <input type="submit" name="submit" value="Valider">
        </form>
    </body>
</html>
