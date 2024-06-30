alert("Comparison of two strings");
var selectType = prompt(
  "1. Meaning using uppercase function.\n2. Meaning using lowercase function.\n3. length."
);

function valueCheckUsingUpperCase() {
  var a = prompt("Enter string 1:");
  var aValue = a.toUpperCase();
  var b = prompt("Enter string 2:");
  var bValue = b.toUpperCase();

  if (aValue === bValue) {
    alert("These two strings are equal in value");
  } else {
    alert("These two strings are not equal in value");
  }
}

function valueCheckUsingLowerCase() {
  var a = prompt("Enter string 1");
  var aValue = a.toLowerCase();

  var b = prompt("Enter string 2");
  var bValue = b.toLowerCase();

  if (aValue === bValue) {
    alert("These two strings are equal in value");
  } else {
    alert("These two strings are not equal in value");
  }
}

function lengthCheckFunction() {
  var a = prompt("Enter length of string 1");
  var aLength = a.length;

  var b = prompt("Enter length of string 2");
  var bLength = b.length;

  if (aLength === bLength) {
    alert("These two strings are equal in length");
  } else {
    alert("These two strings are not equal in length");
  }
}

switch (selectType) {
  case "1":
    valueCheckUsingUpperCase();
    break;
  case "2":
    valueCheckUsingLowerCase();
    break;
  case "3":
    lengthCheckFunction();
    break;
  default:
    alert("Something is wrong with the code! Please check!!");
    break;
}
