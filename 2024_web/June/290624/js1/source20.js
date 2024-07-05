// Code refactored by ChatGPT-4o.
// Alerting the user that they can select between two arrays.
alert("This page lets you select between two arrays");

// Prompting the user to make a choice between two arrays
var choice = prompt("Enter your pick:\n1. myArrayA\n2. myArrayB");

switch (choice) {
  case "1":
    // Demonstrating one way of entering data into the array by assigning values to specific indices
    var myArrayA = [];
    myArrayA[0] = 1;
    myArrayA[1] = 2;
    myArrayA[2] = "hello";
    myArrayA[3] = true;
    myArrayA[4] = false;

    // Using forEach to loop through the array and alert each element
    myArrayA.forEach(function (element) {
      alert(element);
    });
    break;

  case "2":
    // Demonstrating another way of entering data into the array by initializing the array with values
    var myArrayB = [1, 2, "hello", true, false];

    // Using forEach to loop through the array and alert each element
    myArrayB.forEach(function (element) {
      alert(element);
    });
    break;

  default:
    // Handling invalid input
    alert("Invalid input!");
}
