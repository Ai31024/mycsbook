// string literal and numeric literals

alert("Select example");
var selectType = prompt(
  "1. String with String\n2. String with Number\n3. Number with Number\n4. NaN\n5. is NaN?\n6. is not NaN?"
);

// Creating function that runs While Loop.
function sTS() {
  var a = "1";
  var b = "1";

  var c = a + b;

  alert(c);
}

// Creating function that runs For Loop.
function sTN() {
  var a = "1";
  var b = 1;

  var c = a + b;

  alert(c);
}

// Creating function that runs Do-While Loop.
function nTN() {
  var a = 1;
  var b = 1;

  var c = a + b;

  alert(c);
}

// Creating function that runs While Loop.
function myNaNCheck1() {
  var a = "1";
  var b = "a";

  var c = a * b; // this will show a NaN Error.

  alert(c);
}

// Creating function that runs For Loop.
function myNaNCheck2() {
  var a = "1";
  var b = "a";

  var c = a * b; // this is a NaN Error but it will be checked.

  if (isNaN(c)) {
    // isNaN() function checks if it's a NaN or not then follows up with further statement.
    alert("It's not a number");
  }
}

// Creating function that runs Do-While Loop.
function myNaNCheck3() {
  var a = 1;
  var b = 1;

  var c = a * b; // this is not a NaN Error
  if (!isNaN(c)) {
    // !isNaN() function checks if it's not a NaN or not then follows up with further statement.
    alert("It is a number");
  }
}

switch (selectType) {
  case "1":
    sTS();
    break;
  case "2":
    sTN();
    break;
  case "3":
    nTN();
    break;
  case "4":
    myNaNCheck1();
    break;
  case "5":
    myNaNCheck2();
    break;
  case "6":
    myNaNCheck3();
    break;
  default:
    alert("Something is wrong with the code! Please check!!");
    break;
}
