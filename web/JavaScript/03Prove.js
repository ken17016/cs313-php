//Waits until page is loaded so that it can get element by Id. If page is not
//loaded, then it won't be able to find elements. 
window.onload = function () {

    document.getElementById("home").onclick = function () {
        location.href = "./03Prove.php";
    };

    document.getElementById("about").onclick = function () {
        location.href = "./03ProveA.php";
    };

    document.getElementById("contactUs").onclick = function () {
        location.href = "./03ProveB.php";
    };

    document.getElementById("onlineStore").onclick = function () {
        location.href = "./03ProveC.php";
    };
    document.getElementById("cart").onclick = function () {
        location.href = "./03ProveD.php";
    };
};

function add_number() {
    //Variables for quantity to be used for math variables. These variables will change
    //null values to 0 and negative values to 0. You can still input them, but they will
    //not effect the overall results and will be counted as a 0. 
    var q1 = Math.max(0, parseInt(document.getElementById("Quantity1").value)) || 0;
    var q2 = Math.max(0, parseInt(document.getElementById("Quantity2").value)) || 0;
    var q3 = Math.max(0, parseInt(document.getElementById("Quantity3").value)) || 0;
    var q4 = Math.max(0, parseInt(document.getElementById("Quantity4").value)) || 0;
    var q5 = Math.max(0, parseInt(document.getElementById("Quantity5").value)) || 0;
    var q6 = Math.max(0, parseInt(document.getElementById("Quantity6").value)) || 0;
    var q7 = Math.max(0, parseInt(document.getElementById("Quantity7").value)) || 0;

    //Variables for prices. 
    var p1 = parseInt(document.getElementById("Price1").innerHTML);
    var p2 = parseInt(document.getElementById("Price2").innerHTML);
    var p3 = parseInt(document.getElementById("Price3").innerHTML);
    var p4 = parseInt(document.getElementById("Price4").innerHTML);
    var p5 = parseInt(document.getElementById("Price5").innerHTML);
    var p6 = parseInt(document.getElementById("Price6").innerHTML);
    var p7 = parseInt(document.getElementById("Price7").innerHTML);

    //math
    var presult = p1 * q1 + p2 * q2 + p3 * q3 + p4 * q4 + p5 * q5 + p6 * q6 + p7 * q7;
    var qresult = q1 + q2 + q3 + q4 + q5 + q6 + q7;

    //results
    document.getElementById("QTotal").innerHTML = qresult;
    document.getElementById("PTotal").innerHTML = presult;
}
