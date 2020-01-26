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
   $_SESSION["total"]= $Total;
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
   <form action="checkout.php">
      Number of Porgs: <input type="number" name="porg" onchange="add_number()" style="width: 48px; padding:1px;" value="<?=$porg?>" />
      <br>
      Number of Bat Mobiles: <input type="number" name="batMobile" onchange="add_number()" style="width: 48px; padding:1px;" value="<?=$batMobile?>" />
      <br> 
      Number of Millenium falcons: <input type="number" name="millFalacon" onchange="add_number()" style="width: 48px; padding:1px;" value="<?=$millFalcon?>" />
      <br>
      Number of llamas: <input type="number" name="llama" onchange="add_number()" style="width: 48px; padding:1px;" value="<?=$llama?>" />
      <br>
      Number of starships: <input type="number" name="starship" onchange="add_number()" style="width: 48px; padding:1px;" value="<?=$starship?>" />

      <br>
      Number of Thor Hammers: <input type="number" name="thorHammer" onchange="add_number()" style="width: 48px; padding:1px;" value="<?=$thorHammer?>" />

      <br>
      Number of lamas: <input type="number" name="lama" onchange="add_number()" style="width: 48px; padding:1px;" value="<?=$lama?>" />
      <br> 
      Grand Total: <label id="Price2"><?=$Total?></label>

     <input type="submit" value="Submit"> 
</form>
    <a href='./sess.php'><button>Reset</button></a>
   </body>
</html>
