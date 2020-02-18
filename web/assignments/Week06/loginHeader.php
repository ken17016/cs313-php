<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>STEO Login</title>
    <link rel="stylesheet" type="text/css" href="../../StyleSheets/03ProveStyleSheet.css">
    <link rel="shortcut icon" href="../../Images/Hal.ico" />
    <script src="../../JavaScript/05Prove.js"></script>
    <style>
        table {
            width: 85%;
        }

        td {
            text-align: center;
            border: 1px solid black;
        }

        .tdImage {
            width: 200px;
            /*height: 200px; */
            padding-top: 6px;
        }
    </style>
</head>
<body>
   <header>
      <h1>Login</h1>
   <header>
   <form action="login.php" method="post">
      <label>Username: </label>
      <input type="text" name="userName"/>
      <label>Password: </label>
      <input type="password" name="password"/>

      <input type="submit">
      <input type="reset">
   </form>
</body>
</html>
