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
<form action="sess.php" method="post">
    <table>
        <tr>
            <th>Item</th>
            <th>Description</th>
            <th>Image</th>
            <th>Price</th>
            <th>Quantity</th>
        </tr>
        <tr>
            <td>Porg</td>
            <td>From the Star wars Universe, a small bird creature</td>
            <td><img src="../../Images/porg1.jpg" class="tdImage" alt="Picture of Porg Roar" /></td>
            <td>
                <label id="Price1">20000</label>
                <span>Units</span>
            </td>
            <td><input type="number" id="Quantity1" name="porg" onchange="add_number()" style="width: 48px; padding:1px;" value="0" min="0" /></td>
        </tr>
        <tr>
            <td>Bat Mobile</td>
            <td>From the DC Univers, a tactile vehicle</td>
            <td><img src="../../Images/batMobile.jpg" class="tdImage" alt="Picture of the Bat Mobile" /></td>
            <td>
                <label id="Price2">40000</label>
                <span>Units</span>
            </td>
            <td><input type="number" id="Quantity2" name="batMobile" onchange="add_number()" style="width: 48px; padding:1px;" value="0" min="0" /></td>
        </tr>
        <tr>
            <td>MIllenium Falcon</td>
            <td>From the Star Wars Universe, a fast spaceship.</td>
            <td><img src="../../Images/milleniumFalcom.jpg" class="tdImage" alt="Picture of the Mellinium Falcon" /></td>
            <td>
                <label id="Price3">8000000</label>
                <span>Units</span>
            </td>
            <td><input type="number" id="Quantity3" name="millFalcon" onchange="add_number()" style="width: 48px; padding:1px;" value="0" min="0" /></td>
        </tr>
        <tr>
            <td>Llama</td>
            <td>From the Earth, a furry four legged creature</td>
            <td><img src="../../Images/lama1.jpg" class="tdImage" alt="Picture of a llama" /></td>
            <td>
                <label id="Price4">10000</label>
                <span>Units</span>
            </td>
            <td><input type="number" id="Quantity4" name="llama" onchange="add_number()" style="width: 48px; padding:1px;" value="0" min="0" /></td>
        </tr>
        <tr>
            <td>Starship Enterprise</td>
            <td>From the Star Trek Universe, a large spaceship.</td>
            <td><img src="../../Images/starshipEnterprise.jpg" class="tdImage" alt="Picture of the Starship Enterprise" /></td>
            <td>
                <label id="Price5">55000000000</label>
                <span>Units</span>
            </td>
            <td><input type="number" id="Quantity5" name="starship" onchange="add_number()" style="width: 48px; padding:1px;" value="0" min="0" /></td>
        </tr>
        <tr>
            <td>Thor's Hammer</td>
            <td>From the Marvel Universe, a hammer wielded by Thor, god of thunder.</td>
            <td><img src="../../Images/thorsHammer.jpg" class="tdImage" alt="Picture of Thor's Hammer" /></td>
            <td>
                <label id="Price6">152850</label>
                <span>Units</span>
            </td>
            <td><input type="number" name="thorHammer" id="Quantity6" onchange="add_number()" style="width: 48px; padding:1px;" value="0" min="0" /></td>
        </tr>
        <tr>
            <td>Lama</td>
            <td>From the Earth, a monk leader sought after by many for knowledge.</td>
            <td><img src="../../Images/lama2.jpg" class="tdImage" alt="Picture of Dali Lama" /></td>
            <td>
                <label id="Price7">80000</label>
                <span>Units</span>
            </td>
            <td><input type="number" name="lama" id="Quantity7" onchange="add_number()" style="width: 48px; padding:1px;" value="0" min="0" /></td>
        </tr>
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
                <span>Quantity:</span>
                <br />
                <label id="QTotal" style="width: 48px; padding:1px;">0</label>
            </td>
        </tr>
    </table>
   <input type="submit" value="Submit">
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
