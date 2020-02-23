<?php
   session_start();
?>

   <?php
      $firstName = $_POST["firstName"];
      $middleName = $_POST["middleName"];
      $lastName = $_POST["lastName"];
      $phoneNumber = $_POST["phoneNumber"];
      $email = $_POST["email"];
      $choice = $_POST["choice"];
      $location = $_POST["location"];
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>STEO Checkout</title>
      <link rel="stylesheet" type="text/css" href="../../StyleSheets/03ProveStyleSheet.css">
      <link rel="shortcut icon" href="../../Images/Hal.ico" />
      <script src="../../JavaScript/05Prove.js"></script>
   <head>
   <body>
   <h1>Confirmation</h1>
   <hr>
   <pre>Your order is being sent to:
      <?=$firstName?> <?=middleName?> <?=$lastName?>
      <?=$phoneNumber?>  <?=$email?>
      <?=$choice?>
      <?=$location?>
  </pre>
   </body>
</html>
