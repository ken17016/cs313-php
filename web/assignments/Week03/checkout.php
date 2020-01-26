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
      <title>STEO Checkout</title>
      <link rel="stylesheet" type="text/css" href="../../StyleSheets/03ProveStyleSheet.css">
      <link rel="shortcut icon" href="../../Images/Hal.ico" />
      <script src="../../JavaScript/03Prove.js"></script>
   <head>
   <body>
      <h1>Checkout</h1>
      <hr/>
        <form action="confirmation.php" style="padding-bottom:10px; width:500px; margin:10px; padding-left:20px; padding-right:20px;">
            <div style="font-size:30px; margin-bottom:10px;">Please Fill Checkout Form:</div>
            <a style="margin-right:31px;">First Name:</a>
            <input class="textbox" type="text" name="firstName" placeholder="First Name" style="border-radius:5px;" maxlength="22" />
            <br />
            <br />
            <a style="margin-right:10px;">Middle Name:</a>
            <input class="textbox" type="text" name="middleName" placeholder="Middle Name" style="border-radius:5px;" maxlength="22" />
            <br />
            <br />
            <a style=" margin-right:33px;">Last Name: </a>
            <input class="textbox" type="text" name="lastName" placeholder="Last Name" style="border-radius:5px;" maxlength="22" />
            <br />
            <br />
            <span>Phone Number:</span>
            <input class="textbox" type="tel" name="phoneNumber" placeholder="xxx-xxx-xxxx" style="border-radius:5px;" maxlength="10" />
            <br />
            <br />
            <span style="margin-right:73px;">Email:</span>
            <input class="textbox" type="email" name="email" placeholder="user@example.com" style="border-radius:5px;" maxlength="25" />
            <br />
            <br />
            <a>Ideal Contact Method: </a>
            <br />
            <input type="radio" name="choice" value="email" />Email
            <input type="radio" name="choice" value="phone" />Phone
            <input type="radio" name="choice" value="text" />Text
            <input type="radio" name="choice" value="letter" />Letter
            <br />
            <br />
            <a style="font-size:20px;">Please enter your galactic location:</a><br />
            <textarea rows="4" cols=" 50" name="location" style="border-radius:10px; padding:10px; max-width:475px;" placeholder="Interests"></textarea>
            <br />
            <br />
            <input type="submit" value="Submit" />
            <input type="reset" value="Reset" />
      </form>
   </body>
</html>
 
