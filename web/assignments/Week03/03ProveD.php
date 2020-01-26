<?php
   session_start();
?>

<?php
   $porg = $_SESSION["porg"];
   $batMobile = $_SESSION["batMobile"];
   $millFalcon = $_SESSION["millFalcon"];
   $llama = $_SESSION["llama"];
   $starship = $_SESSION["starship"];
   $thorHammer = $_SESSION["thorHammer"];
   $lama = $_SESSION["lama"];
   $Total = ($porg*20000)  + ($batMobile*40000) + ($millFalcon*8000000) + ($llama*10000) + ($starship*55000000000) + ($thorHammer*152850) + ($lama*80000);
?>

<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8" />
    <title>STEO Store</title>
    <link rel="stylesheet" type="text/css" href="../../StyleSheets/03ProveStyleSheet.css">
    <link rel="shortcut icon" href="../../Images/Hal.ico" />
    <script src="../../JavaScript/03Prove.js"></script>
   </head>
   <body>
    <header>
        <h1>Welcome to the Market</h1>
        <div class="tab">
            <button id="home" class="tablinks">Home</button>
            <button id="about" class="tablinks">About</button>
            <button id="contactUs" class="tablinks">Contact Us</button>
            <button id="onlineStore" class="tablinks">Online Store</button>
            <button id="cart" class="tablinks">Cart</button>
        </div>
        <hr />
    </header>
      Number of Porgs: <?=$porg?>
      <br>
      Number of Bat Mobiles: <?=$batMobile?>
      <br> 
      Number of Millenium falcons: <?=$millFalcon?>
      <br>
      Number of llams: <?=$llama?>
      <br>
      Number of starships: <?=$starship?>
      <br>
      Number of Thor Hammers: <?=$thorHammer?>
      <br>
      Number of lamas: <?=$lama?>
      <br> 
      Grand Total: <?=$Total?>
   </body>
</html>
