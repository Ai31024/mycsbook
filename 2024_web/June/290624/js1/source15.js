// Define the sample text
var sampleText = "The quick brown fox jumps over the lazy dog";

// Function to slice a segment of the text
function mySlice() {
  // Extract the substring from index 16 to 19 (not including 19)
  var sampleSegment = sampleText.slice(16, 19);
  // Display the extracted substring
  alert(sampleSegment);
}

// Call the function to execute the slice operation
mySlice();
