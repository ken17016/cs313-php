/*
 *  02Teach java script file. 
 * */

function click(){
    alert("Clicked!");
}

function changeColor(){

    // Variables being assigned and used. 
    var textboxId = "txtColor"; // Sets the id to a var. 
    var textbox = document.getElementById(textboxId); // calls the var that the id is attached to 
    var divId = "1"; //sets the div id to a var. 
    var div = document.getElementById(divId); // Calls the assigned div id var. 
    var color = textbox.value; // gets the value from input with id "txtColor". 

    // Changes the div background color to the specified color. 
    div.style.backgroundColor = color;
}
