/* // Unit test for the getMilk function

// Test case: Should return change when the budget is more than the total cost
function getMilk(rate, budget, quantity) {
  var totalCost = rate * quantity;
  var change = null;
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
      "You have exactly enough budget to buy " + quantity + " bottles of milk."
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

test("getMilk should return change when budget is more than total cost", () => {
  // Arrange
  const rate = 4;
  const budget = 20;
  const quantity = 5;
  const expectedChange = 2;

  // Act
  const actualChange = getMilk(rate, budget, quantity);

  // Assert
  expect(actualChange).toBe(expectedChange);
});
// Unit test for getMilk function with budget exactly equal to total cost

// Arrange
const rate = 4;
const budget = 20;
const quantity = 5;

// Act
const change = getMilk(rate, budget, quantity);

// Assert
expect(change).toBe(0);
// Unit test for the selected code

// Arrange
const rate = 4;
const budget = 15;
const quantity = 5;
const expectedResult = null;

// Act
const result = getMilk(rate, budget, quantity);

// Assert
expect(result).toBe(expectedResult);
// Unit test for the getMilk function with decimal values for rate and budget

// Arrange
const rate = 4.5;
const budget = 18.75;
const quantity = 4;
const expectedChange = 0.25;

// Act
const actualChange = getMilk(rate, budget, quantity);

// Assert
expect(actualChange).toBeCloseTo(expectedChange, 2);
// Unit test for the getMilk function with negative values for rate, budget, or quantity

// Arrange
const rate = -4;
const budget = 20;
const quantity = 5;
const expectedResult = null;

// Act
const result = getMilk(rate, budget, quantity);

// Assert
expect(result).toBe(expectedResult);
// Arrange
const rate = 4;
const budget = 20;
const quantity = 0;
const expectedChange = 20;

// Act
const actualChange = getMilk(rate, budget, quantity);

// Assert
expect(actualChange).toBe(expectedChange);
// Arrange
const rate = 4;
const budget = 20;
const quantity = 0;
const expectedChange = 0;

// Act
const actualChange = getMilk(rate, budget, quantity);

// Assert
expect(actualChange).toBe(expectedChange);
// Test case: Should return null when the budget is less than the total cost and quantity is 0
test("getMilk should return null when budget is less than total cost and quantity is 0", () => {
  // Arrange
  const rate = 4;
  const budget = 15;
  const quantity = 0;
  const expectedResult = null;

  // Act
  const result = getMilk(rate, budget, quantity);

  // Assert
  expect(result).toBe(expectedResult);
});
// Unit test for the getMilk function with budget not enough to buy a full bottle

// Arrange
const rate = 4;
const budget = 15;
const quantity = 4;
const expectedNewQuantity = 3;
const expectedChange = 3;

// Act
const actualChange = getMilk(rate, budget, quantity);
const actualNewQuantity = Math.floor(budget / rate);

// Assert
expect(actualChange).toBe(expectedChange);
expect(actualNewQuantity).toBe(expectedNewQuantity);
// Unit test for the getMilk function with budget more than total cost and quantity as a decimal

// Arrange
const rate = 4;
const budget = 20;
const quantity = 5.5;
const expectedChange = 1.5;

// Act
const actualChange = getMilk(rate, budget, quantity);

// Assert
expect(actualChange).toBeCloseTo(expectedChange, 2);
 */