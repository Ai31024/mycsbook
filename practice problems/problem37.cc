/*Write a program to find the factorial value of any number entered through the keyboard*/
#include <iostream>
int main()
{
    int store = 0;
    unsigned long int number = 0, factorial = 1;
    std::cout << "Enter a number to calculate it's factorial: ";
    std::cin >> number;
    store = number;
    while (number > 0)
    {
        factorial *= number;
        number--;
    }
    std::cout << "Entered number's " << store << " factorial is: " << factorial;
    return 0;
}