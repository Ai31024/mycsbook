// Subject: applying different loop types using function.
alert("Select loop type");
var selectType = prompt("1. While loop\n2. For loop\n3. Do-While loop");
var amount = 0;

// Creating function that runs While Loop.
function whileLoop() {
    var i = 0;

    while (i < 10) {
        amount += 100;
        i++;
    }

    alert("amount is: " + amount);
}

// Creating function that runs For Loop.
function forLoop() {
    for (let i = 0; i < 10; i++) {
        amount += 100;
    }

    alert("amount is: " + amount);
}

// Creating function that runs Do-While Loop.
function doWhileLoop() {
    var i = 100;

    do {
        amount += 100;
        alert("This executed once: " + amount);
        i++;
    } while (i < 10);
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
