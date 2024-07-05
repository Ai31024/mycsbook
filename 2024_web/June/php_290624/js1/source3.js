alert("Enter a number and I will compare it to 10.");

var inputNum1 = 0;

inputNum1 = prompt("Enter a number: ");

if (inputNum1 == 10) {
    alert("You have entered " + inputNum1 + " which is equal to 10.");
} else if (inputNum1 > 10) {
    alert("You have entered " + inputNum1 + " which is greater than 10.");
} else {
    alert("You have entered " + inputNum1 + " which is less than 10.");
}
