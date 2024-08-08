const prompt = require("prompt-sync")({ sigint: true });
const textLimit = 100;
var textBox = null;
textBox = prompt("Enter your message...");

if (textBox !== null) {
  var textPuts = textBox.length;
  var textLeft = textLimit - textBox.length;
  console.log(
    `You have ${textPuts} characters entered. You have ${textLeft} characters left.`
  );
} else {
  console.log("No message entered.");
}
