/*Any integer is input through the keyboard.
Write a program to find out whether it is an odd number or even number.*/
#include <iostream>
int main()
{
    int value;
    std::cout << "Input a number: ";
    std::cin >> value;
    if (value % 2 == 0)
    {
        std::cout << "It's an Even Number.";
    }
    else
    {
        std::cout << "It's an Odd Numbmer.";
    }
    return 0;
}