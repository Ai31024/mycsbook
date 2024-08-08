function lifeInWeeks(age) {
  var yearsLeft = 73 - age;
  var daysLeft = yearsLeft * 365;
  var weeksLeft = yearsLeft * 52;
  var monthLeft = yearsLeft * 12;
  console.log(
    "You have " +
      daysLeft +
      " days, " +
      weeksLeft +
      " weeks, and " +
      monthLeft +
      " months left."
  );
}

lifeInWeeks(27);
