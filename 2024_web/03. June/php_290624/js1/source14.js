// Comments added by ChatGPT-4o.
// Sample text containing the phrase to search
var sampleText =
  "The quick brown fox jumps over the lazy dog and The quick brown fox jumps over the lazy dog";

// Function to find the first occurrence of the word 'fox' in the sample text
function myIndexOf() {
  var indexNum = sampleText.indexOf("fox");
  alert(indexNum); // Display the index of the first occurrence
}

// Function to find the last occurrence of the word 'fox' in the sample text
function myLastIndexOf() {
  var indexNum = sampleText.lastIndexOf("fox");
  alert(indexNum); // Display the index of the last occurrence
}

// Inform the user about the script's functionality
alert(
  "This script will give two options\nThese options will find the index of the word 'fox' in the pangram."
);

// Prompt the user to choose between finding the first or last occurrence
var choice = prompt("1. indexOf\n2. lastIndexOf");

// Execute the appropriate function based on the user's choice
switch (choice) {
  case "1":
    myIndexOf(); // Call function to find the first occurrence
    break;
  case "2":
    myLastIndexOf(); // Call function to find the last occurrence
    break;
  default:
    alert("Please enter from the given options!"); // Handle invalid input
    break;
}
