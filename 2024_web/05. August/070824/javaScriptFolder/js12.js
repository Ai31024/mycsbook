function getMilkOf30With(yourBudget) {
  const milkRate = 30;
  var milkQuantity = Math.floor(yourBudget / milkRate);
  return milkQuantity;
}

function getChangeLeft(yourBudget) {
  const milkRate = 30;
  var change = yourBudget % milkRate;
  return change;
}

// Test the function

var yourBudget = 150;
console.log("Your budget: Rs. " + yourBudget);
var milkQuantity = getMilkOf30With(yourBudget);
console.log("You can buy " + milkQuantity + " bottles of milk.");
var changeLeft = getChangeLeft(yourBudget);
console.log(
  "After buying " +
    milkQuantity +
    " bottles of milk with your budget of " +
    yourBudget +
    ". Change left is " +
    changeLeft
);
