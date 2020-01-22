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
        <?=$email?>
        <?=$major?>
        <?=$comments?>
    </body>
</html>
