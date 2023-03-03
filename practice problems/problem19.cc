/*Write a program to find first day of the year.*/
#include <iostream>

int main()
{
    int year, leapdays, firstday;
    long int normaldays, totaldays;
    std::cout << "Enter a year: ";
    std::cin >> year;
    normaldays = (year - 1) * 365;
    leapdays = ((year - 1) / 4) - ((year - 1) / 100) + ((year - 1) / 400);
    totaldays = normaldays + leapdays;
    firstday = totaldays & 7;
    switch (firstday)
    {
    case (0):
        std::cout << "The first day of " << year << " is Sunday." << std::endl;
        break;
    case (1):
        std::cout << "The first day of " << year << " is Monday." << std::endl;
        break;
    case (2):
        std::cout << "The first day of " << year << " is Tuesday." << std::endl;
        break;
    case (3):
        std::cout << "The first day of " << year << " is Wednesday." << std::endl;
        break;
    case (4):
        std::cout << "The first day of " << year << " is Thursday." << std::endl;
        break;
    case (5):
        std::cout << "The first day of " << year << " is Friday." << std::endl;
        break;
    case (6):
        std::cout << "The first day of " << year << " is Saturday." << std::endl;
        break;
    }
    return 0;
}