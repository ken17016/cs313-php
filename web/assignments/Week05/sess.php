
<?php
   session_start();
?>

<?php
   $_SESSION["porg"]= $_POST["Porg"];
   $_SESSION["batMobile"]= $_POST["Bat Mobile"];
   $_SESSION["millFalcon"]= $_POST["Millenium Falcon"];
   $_SESSION["llama"]= $_POST["Llama"];
   $_SESSION["starship"]= $_POST["starship Enterprise"];
   $_SESSION["thorHammer"]= $_POST["Thors Hammer"];
   $_SESSION["lama"]= $_POST["Lama"];

   header("Location: cart.php");
?>
