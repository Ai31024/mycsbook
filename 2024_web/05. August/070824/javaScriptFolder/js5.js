// var firstLetter = myName.charAt(0).toUpperCase; tip
// var firstLetterCapitalized = firstLetter.capitalize();
// Create a prompt and return values with only first letter capitalized.

const prompt = require("prompt-sync")({ sigint: true });
var myName = null;
myName = prompt("Enter your name: ");

if (myName !== null) {
  var firstLetter = myName.slice(0, 1);
  var firstLetterCapitalized = firstLetter.toUpperCase();
  var restOfName = myName.slice(1);
  var restOfNameLower = restOfName.toLowerCase();
  var capitalizedName = firstLetterCapitalized + restOfNameLower;
  console.log("Hello, " + capitalizedName + ".");
} else {
  console.log("Name is required.");
}
