/*Write a program to find the absolute value of a number entered through the keyboard.*/
#include <iostream>
int main()
{
    int value;
    std::cout << "Enter value: ";
    std::cin >> value;
    if (value > 0)
    {
        std::cout << "Absolute of " << value << " is " << value << std::endl;
    }
    else
    {
        std::cout << "Absolute of " << value << " is " << -1 * value << std::endl;
    }
    return 0;
}