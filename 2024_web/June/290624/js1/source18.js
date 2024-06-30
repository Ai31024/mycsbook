// Define the sample text
const sampleText = "Does this sentence have hello in it?";

// Function to check if 'hello' exists anywhere in the string
function checkHello1() {
  const regex = /hello/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if the string starts with 'hello'
function checkHello2() {
  const regex = /^hello/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if the string ends with 'hello'
function checkHello3() {
  const regex = /hello$/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if the string contains 'hellooooo' (one or more 'l's)
function checkHello4() {
  const regex = /hel+o/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if the string contains 'helo' (zero or more 'l's)
function checkHello5() {
  const regex = /hel*o/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if the string contains 'helo' (zero or one 'l')
function checkHello6() {
  const regex = /hel?o/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if the string contains 'hello' or 'goodbye'
function checkHello7() {
  const regex = /hello|goodbye/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if the string contains 'hello' with any two characters in between
function checkHello8() {
  const regex = /he..o/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if the string contains any word character followed by 'ello'
function checkHello9() {
  const regex = /\wello/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if the string contains 'hello' at a word boundary
function checkHello10() {
  const regex = /\bhello/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Function to check if the string contains any character from the set [crnld] followed by 'hello'
function checkHello11() {
  const regex = /[crnld]hello/;
  if (regex.test(sampleText)) {
    alert("It exists!");
  } else {
    alert("It does not exist!");
  }
}

// Prompt the user to choose an option
const choice = prompt(`Select from the following options:
1. Check if 'hello' exists
2. Check if string starts with 'hello'
3. Check if string ends with 'hello'
4. Check for 'hellooooo' (one or more 'l's)
5. Check for 'helo' (zero or more 'l's)
6. Check for 'helo' (zero or one 'l')
7. Check for 'hello' or 'goodbye'
8. Check for 'he..o'
9. Check for any word character followed by 'ello'
10. Check for 'hello' at a word boundary
11. Check for any character from [crnld] followed by 'hello'
`);

// Execute the corresponding function based on user choice
switch (choice) {
  case "1":
    checkHello1();
    break;
  case "2":
    checkHello2();
    break;
  case "3":
    checkHello3();
    break;
  case "4":
    checkHello4();
    break;
  case "5":
    checkHello5();
    break;
  case "6":
    checkHello6();
    break;
  case "7":
    checkHello7();
    break;
  case "8":
    checkHello8();
    break;
  case "9":
    checkHello9();
    break;
  case "10":
    checkHello10();
    break;
  case "11":
    checkHello11();
    break;
  default:
    alert("Please select from the given options!");
}

/*
Some funny texts:
    /^[0-9]{5}(?:-[0-9]{4})?$/ -> this is for checking US postal code.
    /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/ -> this is for checking email.
*/
