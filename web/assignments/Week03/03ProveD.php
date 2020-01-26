<?php
   session_start();
?>

<?php
   $_SESSION["porg"]= $_POST["porg"];
   $_SESSION["batMobile"]= $_POST["batMobile"];
   $_SESSION["millFalcon"]= $_POST["millFalcon"];
   $_SESSION["llama"]= $_POST["llama"];
   $_SESSION["starship"]= $_POST["starship"];
   $_SESSION["thorHammer"]= $_POST["thorHammer"];
   $_SESSION["lama"]= $_POST["lama"];
?>

<!DOCTYPE html>
<html>
   <head>
   </head>
   <body>
      <?=$_SESSION["porg"]?>
   </body>
</html>
