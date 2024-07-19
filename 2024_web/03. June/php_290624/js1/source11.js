// Refactored code by ChatGPT-4o.

alert("Select example");
var selectType = prompt(
  "1. String with String\n2. String with Number\n3. Number with Number\n4. NaN\n5. is NaN?\n6. is not NaN?"
);

// Function for string concatenation with string.
function stringWithString() {
  var a = "1";
  var b = "1";

  var c = a + b;

  alert(c); // Outputs "11" (string concatenation)
}

// Function for string concatenation with number.
function stringWithNumber() {
  var a = "1";
  var b = 1;

  var c = a + b;

  alert(c); // Outputs "11" (string concatenation)
}

// Function for number addition with number.
function numberWithNumber() {
  var a = 1;
  var b = 1;

  var c = a + b;

  alert(c); // Outputs 2 (number addition)
}

// Function to demonstrate NaN result.
function generateNaN() {
  var a = "1";
  var b = "a";

  var c = a * b; // This will result in NaN.

  alert(c); // Outputs NaN
}

// Function to check if a value is NaN.
function checkIsNaN() {
  var a = "1";
  var b = "a";

  var c = a * b; // This results in NaN.

  if (isNaN(c)) {
    // isNaN() function checks if the value is NaN.
    alert("It's not a number"); // Outputs "It's not a number"
  }
}

// Function to check if a value is not NaN.
function checkIsNotNaN() {
  var a = 1;
  var b = 1;

  var c = a * b; // This results in 1.

  if (!isNaN(c)) {
    // !isNaN() function checks if the value is not NaN.
    alert("It is a number"); // Outputs "It is a number"
  }
}

switch (selectType) {
  case "1":
    stringWithString();
    break;
  case "2":
    stringWithNumber();
    break;
  case "3":
    numberWithNumber();
    break;
  case "4":
    generateNaN();
    break;
  case "5":
    checkIsNaN();
    break;
  case "6":
    checkIsNotNaN();
    break;
  default:
    alert("Something is wrong with the code! Please check!!");
    break;
}
