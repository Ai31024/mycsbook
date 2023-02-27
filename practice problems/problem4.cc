/*Temperature of a city in fahrenheit degrees is input through the keyboard.
Write a program to convert this temperature into Centigrade degrees.*/

#include <iostream>
int main()
{
    float temp_Fahrenheit, temp_Centigrade;
    std::cout << "Please enter the temperature value in fahrenheit degrees = ";
    std::cin >> temp_Fahrenheit;
    std::cout << "You have entered temperature : " << temp_Fahrenheit << " Fahrenheit degrees\n";
    temp_Centigrade = (5.0 / 9.0) * (temp_Fahrenheit - 32.0);
    std::cout << "This temperature in Centigrade degrees will be : " << temp_Centigrade << "\n";
    return 0;
}