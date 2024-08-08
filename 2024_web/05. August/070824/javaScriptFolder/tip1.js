function toCamelCase(str) {
  return str
    .split(/[\s-_]+/) // Split the string by spaces, hyphens, or underscores
    .map((word, index) => {
      // Capitalize the first letter of each word except the first one
      if (index === 0) {
        return word.toLowerCase(); // Keep the first word in lowercase
      }
      return word.charAt(0).toUpperCase() + word.slice(1).toLowerCase();
    })
    .join(""); // Join the words back together
}

// Example usage:
console.log(toCamelCase("hello world")); // "helloWorld"
console.log(toCamelCase("make-it-camel-case")); // "makeItCamelCase"
console.log(toCamelCase("convert_to_camel_case")); // "convertToCamelCase"
