// Cat age to Human age Calculator.
const prompt = require("prompt-sync")({ sigint: true });
var catAge = null;
catAge = prompt("Enter cat's age: ");
var humanAge = 24 + (catAge - 2) * 4;

if (catAge !== null) {
  console.log("The cat is approximately " + humanAge + " human years old.");
} else {
  console.log("Invalid input. Please enter a valid cat age.");
}
