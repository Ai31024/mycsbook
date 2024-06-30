alert("Check fuel price");

var fuelType = "n/a";
var regPet = 97;
var prePet = 107;
var regDie = 95;
var preDie = 100;
var rateTxt = "The rate is: ";

fuelType = prompt("Enter the type of fuel to get its rate: \n1. Regular Petrol\n2. Premium Petrol\n3. Regular Diesel\n4. Premium Diesel");

switch (fuelType) {
    case "1":
    case "Regular Petrol":
        alert(rateTxt + regPet);
        break;
    case "2":
    case "Premium Petrol":
        alert(rateTxt + prePet);
        break;
    case "3":
    case "Regular Diesel":
        alert(rateTxt + regDie);
        break;
    case "4":
    case "Premium Diesel":
        alert(rateTxt + preDie);
        break;
    default:
        alert("You have not selected from given option correctly!");
        break;
}
