/*The body mass index (BMI) is defined as ratio of the weight of a person (in KGs)
to the square of the height (in meters). Write a program that receives weight and height,
Calculates the BMI, and reports the BMI as per the following table:*/

/*

BMI Category            BMI

Starvation              < 15.0
Anorexic                15.1 to 17.5
Underweight             17.6 to 18.5
Ideal                   18.6 to 24.9
Overweight              25.0 to 29.9
Obese                   30.0 to 39.9
Morbidly Obese          >= 40.0

*/

#include <iostream>
int main()
{
    float weight, height, BMI;

    std::cout << "Enter following data for calculation of BMI:\n";

    std::cout << "Input Weight: ";
    std::cin >> weight;
    std::cout << "Input Height: ";
    std::cin >> height;

    BMI = weight / (height * height);

    if (BMI < 15.0)
    {
        std::cout << "BMI lies on Starvation zone" << std::endl;
    }

    if (BMI >= 15.0 && BMI <= 17.5)
    {
        std::cout << "BMI lies on Anorexic zone" << std::endl;
    }

    if (BMI >= 17.6 && BMI <= 18.5)
    {
        std::cout << "BMI lies on Underweight zone" << std::endl;
    }

    if (BMI >= 18.6 && BMI <= 24.9)
    {
        std::cout << "BMI lies on Ideal zone" << std::endl;
    }

    if (BMI >= 25.0 && BMI <= 29.9)
    {
        std::cout << "BMI lies on Overweight zone" << std::endl;
    }

    if (BMI >= 30.0 && BMI <= 30.9)
    {
        std::cout << "BMI lies on Obese zone" << std::endl;
    }

    if (BMI > 40.0)
    {
        std::cout << "BMI lies on Morbidly Obese zone" << std::endl;
    }
    return 0;
}