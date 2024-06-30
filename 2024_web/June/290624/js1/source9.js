// Modified code from ChatGPT-4o.
alert("Select loop type");
var selectType = prompt("1. While loop\n2. For loop\n3. Do-While loop");

// Creating function that runs While Loop.
function whileLoop() {
    var amount = 0;
    var i = 0;

    while (i < 10) {
        amount += 100;
        i++;
    }

    alert("Amount is: " + amount);
}

// Creating function that runs For Loop.
function forLoop() {
    var amount = 0;

    for (var i = 0; i < 10; i++) {
        amount += 100;
    }

    alert("Amount is: " + amount);
}

// Creating function that runs Do-While Loop.
function doWhileLoop() {
    var amount = 0;
    var i = 0;

    do {
        amount += 100;
        i++;
    } while (i < 10);

    alert("Amount is: " + amount);
}

switch (selectType) {
    case "1":
        whileLoop();
        break;
    case "2":
        forLoop();
        break;
    case "3":
        doWhileLoop();
        break;
    default:
        alert("Something is wrong with the code! Please check!!");
        break;
}
