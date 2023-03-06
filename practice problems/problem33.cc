/*A certain grade of steel is graded according to the following conditions.*/

/*
(i) Hardness must be greater than 50.
(ii) Carbon content must be less than 0.7.
(iii) Tensile strength must be greater than 5600.
*/

/*The grades are as follows: */

/*
Grade is 10 if all three conditions are met.
Grade is 9 if condition (i) and (ii) are met.
Grade is 6 if condition (ii) and (iii) are met.
Grade is 7 if condition (i) and (iii) are met.
Grade is 6 if only one condition is met.
Grade is 5 if none of the conditions are met.
*/

/*Write a Program, which will require the user to give values of hardness, cardon content
and tensile strength of the steel under consideration and output the grade of the steel.*/

#include <iostream>
int main()
{
    float hardness, carbon_content, tensile_strength;
    std::cout << "Enter the properties of steel for it's grading:\n";
    std::cout << "Input Hardness of steel: ";
    std::cin >> hardness;
    std::cout << "Input Carbon Content of steel: ";
    std::cin >> carbon_content;
    std::cout << "Input Tensile Strength of steel: ";
    std::cin >> tensile_strength;

    if (hardness > 50 && carbon_content < 0.7 && tensile_strength > 5600)
    {
        std::cout << "This is a Grade 10 Steel." << std::endl;
    }
    else if (hardness > 50 && carbon_content < 0.7)
    {
        std::cout << "This is a Grade 9 Steel." << std::endl;
    }
    else if (carbon_content < 0.7 && tensile_strength > 5600)
    {
        std::cout << "This is a Grade 8 Steel." << std::endl;
    }
    else if (hardness > 50 && tensile_strength > 5600)
    {
        std::cout << "This is a Grade 7 Steel." << std::endl;
    }
    else if (hardness > 50 || carbon_content < 0.7 || tensile_strength > 5600)
    {
        std::cout << "This is a Grade 6 Steel." << std::endl;
    }
    else
    {
        std::cout << "This is a Grade 5 Steel." << std::endl;
    }

    return 0;
}