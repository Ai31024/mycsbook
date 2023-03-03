/*Any year is input through the keyboard.
Write a program to determine whether the year is a leap year or not.*/
#include <iostream>
int main()
{
    int year;
    std::cout << "Input an year: ";
    std::cin >> year;
    if (year % 4 == 0)
    {
        if (year % 100 == 0)
        {
            if (year % 400 == 0)
            {
                std::cout << "It's a leap year.";
            }
            else
            {
                std::cout << "It's not a leap year.";
            }
        }
        else
        {
            std::cout << "It's not a leap year.";
        }
    }
    else
    {
        std::cout << "It's not a leap year.";
    }
    return 0;
}