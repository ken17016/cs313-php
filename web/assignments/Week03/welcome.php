<?php
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $major = htmlspecialchars($_POST["major"]);
    $comments = htmlspecialchars($_POST["comments"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Results</title>
    </head>
    <body>
        <?=$name?>
        <br>
        <a href="mailto: <?=$email?>"><?$email?></a>
        <br>
        <?=$major?>
        <br>
        <?=$comments?>
    </body>
</html>
