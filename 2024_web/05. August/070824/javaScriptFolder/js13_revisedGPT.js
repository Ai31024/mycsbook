// Buying milk with return function.
// @Ai31024 X ChatGPT-4o mini.

/**
 * @function getMilk
 * @description This function calculates the number of milk bottles that can be bought
 * with a given budget and the change left after the purchase. It also handles cases
 * where the budget is insufficient or exactly matches the total cost.
 *
 * @param {number} rate - The cost of one bottle of milk.
 * @param {number} budget - The total amount of money available for purchasing milk.
 * @param {number} quantity - The number of milk bottles intended to be purchased.
 *
 * @returns {number|null} The remaining change after purchasing the milk.
 * Returns null if the inputs are invalid (negative or zero).
 */
function getMilk(rate, budget, quantity) {
  // Calculate the total cost of the desired quantity of milk
  var totalCost = rate * quantity;
  var change = null;

  // Input validation: Check for negative or zero values in rate, budget, or quantity
  if (rate <= 0 || budget <= 0 || quantity <= 0) {
    console.log("Entries cannot be negative or zero.");
    return null; // Return null for invalid inputs
  }

  // Case 1: If the budget is greater than the total cost
  if (totalCost < budget) {
    change = budget - totalCost; // Calculate the remaining change
    console.log(
      "You can buy " +
        quantity +
        " bottles of milk with your current budget of $" +
        budget +
        " and have change of $" +
        change
    );
  }
  // Case 2: If the budget exactly matches the total cost
  else if (totalCost === budget) {
    change = 0; // No change left as the budget exactly matches the total cost
    console.log(
      "You have exactly enough budget to buy " + quantity + " bottles of milk."
    );
  }
  // Case 3: If the budget is less than the total cost
  else {
    var moreMoney = totalCost - budget; // Calculate additional money needed
    var newQuantity = Math.floor(budget / rate); // Calculate how many bottles can be bought within the budget
    var newTotal = newQuantity * rate; // Recalculate the total cost for the affordable quantity
    change = budget - newTotal; // Calculate the remaining change

    // Inform the user about the shortfall and the adjusted quantity
    console.log(
      "You need $" +
        moreMoney +
        " more to buy " +
        quantity +
        " bottles of milk."
    );
    console.log(
      "You can buy " +
        newQuantity +
        " bottles of milk with your current budget of $" +
        budget +
        " and have $" +
        change +
        " left as change."
    );
  }

  return change; // Return the remaining change
}

// Example usage of the function
getMilk(3, 20, 6);
// Output: You can buy 6 bottles of milk with your current budget of $20 and have change of $2
