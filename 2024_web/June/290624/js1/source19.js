// This source code holds Arrays.
alert("This page let you select between two arrays");

var choice = prompt("enter your pick\n1. myArrayA\n2. myArrayB");

switch (choice) {
  case "1":
    var myArrayA = [];

    myArrayA[0] = 1;
    myArrayA[1] = 2;
    myArrayA[2] = "hello";
    myArrayA[3] = true;
    myArrayA[4] = false;

    alert(myArrayA[0]);
    alert(myArrayA[1]);
    alert(myArrayA[2]);
    alert(myArrayA[3]);
    alert(myArrayA[4]);

    break;

  case "2":
    var myArrayB = [1, 2, "hello", true, false];

    alert(myArrayB[0]);
    alert(myArrayB[1]);
    alert(myArrayB[2]);
    alert(myArrayB[3]);
    alert(myArrayB[4]);

    break;

  default:
    alert("invalid input!");
}
