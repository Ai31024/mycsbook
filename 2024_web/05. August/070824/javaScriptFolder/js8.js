function myFunction(bottles) {
  console.log("Go Up");
  console.log("Go Right");
  console.log("Get " + bottles + " bottles of milk");
  console.log("One bottle costs 30rs.");
  console.log(bottles + " bottles of milk costs: " + bottles * 30 + "rs.");
  console.log("Go Left");
  console.log("Go Down");
}

myFunction(10); // Call the function with 10 bottles of milk as argument. The function will then perform the required steps.
