/* if (bottles * 30 > currentBudget) {
    console.log("Insufficient budget.");
    return;
} else {
    console.log("Bought ");
    console.log("Enjoy your milk!");
    console.log("Thank you!");
} */
/**
 * This function simulates a simple milk purchase scenario. It calculates the total cost of the milk bottles,
 * checks if the budget is sufficient, and provides appropriate messages. It also updates the remaining balance.
 *
 * @param {number} bottles - The number of milk bottles to be purchased.
 *
 * @returns {void} The function does not return any value.
 */
function myFunction(bottles) {
  const currentBudget = 300;
  var currentBalance = currentBudget;
  console.log("Go Up");
  console.log("Go Right");
  console.log("Your order is for " + bottles + " bottles of milk");
  console.log("One bottle costs 30rs.");
  console.log(bottles + " bottles of milk costs: " + bottles * 30 + "rs.");
  if (bottles * 30 > currentBudget) {
    console.log("Insufficient budget to buy " + bottles + " bottles of milk.");
    console.log(
      "You can buy " + Math.floor(currentBudget / 30) + " bottles of milk."
    );
    console.log(
      "You bought " + Math.floor(currentBudget / 30) + " bottles of milk"
    );
    console.log("Enjoy your milk!");
    console.log("Thank you!");
    currentBalance = currentBudget - Math.floor(currentBudget / 30) * 30;
    console.log("Your remaining balance is: " + currentBalance + "rs.");
    console.log("Go Left");
    console.log("Go Down");
    return currentBalance;
  } else {
    console.log("Bought " + bottles + " bottles of milk.");
    console.log("Enjoy your milk!");
    console.log("Thank you!");
    currentBalance = currentBudget - bottles * 30;
    console.log("Your remaining balance is: " + currentBalance + "rs.");
    console.log("Go Left");
    console.log("Go Down");
    return currentBalance;
  }
}

myFunction(12); // Call the function with entered amount of bottles of milk as argument. The function will then perform the required steps.
