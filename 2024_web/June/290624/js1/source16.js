// Checking if a word exist in a given sentence.

// Defining a sample text.
var sampleText = "Does this sentence have hello in it?";

// Function foo() uses short hand method to check for a particular word.
function foo() {
  var myRegularExpression = /hello/;
  if (myRegularExpression.test(sampleText)) {
    alert("it exists!");
  } else {
    alert("it does not exist!");
  }
}

// Function bar() uses long hand method to check for a particular word.
function bar() {
  var myRegularExpression = new RegExp("hello");
  if (myRegularExpression.test(sampleText)) {
    alert("it exists!");
  } else {
    alert("it does not exist!");
  }
}

// Function oof() uses long hand method to check for a particular word.
function oof() {
  var myRegularExpression = /salaam/;
  if (myRegularExpression.test(sampleText)) {
    alert("it exists!");
  } else {
    alert("it does not exist!");
  }
}

// Function rab() uses long hand method to check for a particular word.
function rab() {
  var myRegularExpression = new RegExp("salaam");
  if (myRegularExpression.test(sampleText)) {
    alert("it exists!");
  } else {
    alert("it does not exist!");
  }
}

// Choice variable.
var choice = prompt(
  "select from the following options\n1. foo\n2. bar\n3. oof\n4. rab"
);

// Switching.
switch (choice) {
  case "1":
    foo();
    break;
  case "2":
    bar();
    break;
  case "3":
    oof();
    break;
  case "4":
    rab();
    break;
  default:
    alert("Please select from the given option!");
}
