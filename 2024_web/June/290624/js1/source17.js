// Code refactored by ChatGPT-4o.
// Define the sample text
const sampleText = "Does this sentence have hello in it?";

// Function to check if 'hello' exists using a regex literal (shorthand method)
function checkHelloWithLiteral() {
  const regex = /hello/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if 'hello' exists using the RegExp constructor (longhand method)
function checkHelloWithConstructor() {
  const regex = new RegExp("hello");
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if 'salaam' exists using a regex literal (shorthand method)
function checkSalaamWithLiteral() {
  const regex = /salaam/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if 'salaam' exists using the RegExp constructor (longhand method)
function checkSalaamWithConstructor() {
  const regex = new RegExp("salaam");
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Prompt the user to choose an option
const choice = prompt(`Select from the following options:
1. Check 'hello' with regex literal
2. Check 'hello' with RegExp constructor
3. Check 'salaam' with regex literal
4. Check 'salaam' with RegExp constructor`);

// Execute the corresponding function based on user choice
switch (choice) {
  case "1":
    checkHelloWithLiteral();
    break;
  case "2":
    checkHelloWithConstructor();
    break;
  case "3":
    checkSalaamWithLiteral();
    break;
  case "4":
    checkSalaamWithConstructor();
    break;
  default:
    alert("Please select from the given options!");
}
