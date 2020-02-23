<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>STEO Store</title>
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
   <?php
   require('dbcon.php');
   $db = get_db();
?>
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
            <button id="login" class="tablinks">Login</button>
        </div>
        <hr />
    </header>
<form action="sess.php" method="post">
    <table>
        <tr>
            <th>Item</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        
        <?php 
               $i = 0;
               $statement = $db->prepare('Select * from products');
   $statement->execute();
   $products = $statement->fetchALL(PDO::FETCH_ASSOC);
   foreach($products as $product){
      $poster = str_replace(' ', '', $product['item']);
      $image = lcfirst($poster);
      $i++;
      echo "<tr><td>" . $product['item'] . "</td> <td>" . $product['description'] . "</td> <td><img src = '../../Images/". $image .".jpg'/ class='tdImage'></td> <td> <label id=''>". $product['price'] . "</label> <span>Units</span> </td><td><input type='number' id='Quantity".$i."' name='". $poster ."' style='width: 48px; padding:1px;' value='0' min='0'/></td> </tr>"; 
   }
?>
        <tr>
            <td style="border: none;"></td>
            <td style="border: none;"></td>
            <td style="border: none;"></td>
            <td>
                <div>
                    <span>Total Price:</span>
                    <br />
                    <label id="PTotal">0</label>
                    <span>Units</span>
                </div>
            </td>
            <td>
                <input type="submit" value="Submit">
            </td>
        </tr>
    </table>
</form>
    <footer>
        <hr />
        <div style="min-width:200px;">
            <span>Sir Tibbit's Emporium of Oddities</span>
        </div>
        <div class="center" style="min-width:200px;">
            <span>Intergalactic Copywrite </span>
        </div>
        <div>
            <span class="float-right">South quadrant from Neurostar 14-667</span>
        </div>
    </footer>
</body>
</html> 
