// Buying milk with return function.
// @Ai31024
function getMilk(rate, budget, quantity) {
  var totalCost = rate * quantity;
  var change = null;
  if (rate < 0 || budget < 0 || quantity < 0) {
    console.log("Entry cannot be negative");
    return null;
  } else if (rate == 0 || budget == 0 || quantity == 0) {
    console.log("Entry cannot be zero.");
  } else {
    if (totalCost < budget) {
      change = budget - totalCost;
      console.log(
        "You can buy " +
          quantity +
          " bottles of milk with your current budget of $" +
          budget +
          " and have change of $" +
          change
      );
      return change;
    } else if (totalCost == budget) {
      change = budget - totalCost;
      console.log(
        "You have exactly enough budget to buy " +
          quantity +
          " bottles of milk."
      );
      return change;
    } else {
      var moreMoney = totalCost - budget;
      var newQuantity = Math.floor(budget / rate);
      var newTotal = newQuantity * rate;
      change = budget - newTotal;
      console.log(
        "You need $" + moreMoney + " to buy " + quantity + " bottles of milk."
      );
      console.log(
        "You can buy " +
          newQuantity +
          " bottles of milk with your current budget of $" +
          budget
      );
      console.log(
        "You bought " +
          newQuantity +
          " bottles of milk with your current budget of $" +
          budget
      );
      console.log("Change left $" + change);
      return change;
    }
  }
}

getMilk(3, 20, 6); // Output: You can buy 6 of milk with your current budget of $20 and have change of $2
