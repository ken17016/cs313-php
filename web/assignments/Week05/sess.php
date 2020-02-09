
<?php
   session_start();
?>

<?php
   $_SESSION["porg"]= $_POST["Porg"];
   $_SESSION["batMobile"]= $_POST["BatMobile"];
   $_SESSION["millFalcon"]= $_POST["MilleniumFalcon"];
   $_SESSION["llama"]= $_POST["Llama"];
   $_SESSION["starship"]= $_POST["starshipEnterprise"];
   $_SESSION["thorHammer"]= $_POST["ThorsHammer"];
   $_SESSION["lama"]= $_POST["Lama"];

   header("Location: cart.php");
?>
