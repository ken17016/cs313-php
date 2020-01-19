<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>STEO Contact</title>
    <link rel="stylesheet" type="text/css" href="../../StyleSheets/03ProveStyleSheet.css">
    <link rel="shortcut icon" href="../../Images/Hal.ico" />
    <script src="../../JavaScript/03Prove.js"></script>
    <style>
        form {
            font-size: 20px;
            background-color: #a7adba;
        }

        .textbox {
            padding: 2px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Contact Us Today!</h1>
        <div class="tab">
            <button id="home" class="tablinks">Home</button>
            <button id="about" class="tablinks">About</button>
            <button id="contactUs" class="tablinks">Contact Us</button>
            <button id="onlineStore" class="tablinks">Online Store</button>
        </div>
        <hr />
    </header>
    <div>
        <form action="" style="padding-bottom:10px; width:500px; margin:10px; padding-left:20px; padding-right:20px;">
            <div style="font-size:30px; margin-bottom:10px;">Please Fill Out Contact Form:</div>
            <a style="margin-right:31px;">First Name:</a>
            <input class="textbox" type="text" placeholder="First Name" style="border-radius:5px;" maxlength="22" />
            <br />
            <br />
            <a style="margin-right:10px;">Middle Name:</a>
            <input class="textbox" type="text" placeholder="Middle Name" style="border-radius:5px;" maxlength="22" />
            <br />
            <br />
            <a style=" margin-right:33px;">Last Name: </a>
            <input class="textbox" type="text" placeholder="Last Name" style="border-radius:5px;" maxlength="22" />
            <br />
            <br />
            <span>Phone Number:</span>
            <input class="textbox" type="tel" placeholder="xxx-xxx-xxxx" style="border-radius:5px;" maxlength="10" />
            <br />
            <br />
            <span style="margin-right:73px;">Email:</span>
            <input class="textbox" type="email" placeholder="user@example.com" style="border-radius:5px;" maxlength="25" />
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
            <a style="font-size:20px;">What are you interested in?:</a><br />
            <textarea rows="4" cols=" 50" style="border-radius:10px; padding:10px; max-width:475px;" placeholder="Interests"></textarea>
            <br />
            <br />
            <a>Choose preferred method of travel:</a>
            <select>
                <option value="truck">Truck</option>
                <option value="car">Car</option>
                <option value="airplane">Airplane</option>
                <option value="spacehip">Spaceship</option>
                <option value="warpTunnel">Warp Tunnel</option>
                <option value="instant">Instant</option>
            </select>
            <br />
            <br />
            <a>Please choose a color:</a>
            <list>
                <br />
                <input type="checkbox" name="blue" />Blue <br />
                <input type="checkbox" name="red" />Red <br />
                <input type="checkbox" name="green" />Green <br />
                <input type="checkbox" name="black" />Black <br />
                <input type="checkbox" name="white" />White <br />
                <input type="checkbox" name="purple" />Purple <br />
            </list>
            <br />
            <input type="submit" value="Submit" />
            <input type="reset" value="Reset" />
        </form>
    </div>
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
