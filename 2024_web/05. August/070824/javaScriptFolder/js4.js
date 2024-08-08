// Text Limit is 10.
const prompt = require("prompt-sync")({ sigint: true });
var textBox = null;
textBox = prompt("Enter your message under 10 characters: ");

if (textBox !== null) {
  console.log("Your message: " + textBox.slice(0, 10));
} else {
  console.log("No input provided.");
}
