#include <iostream>
int main()
{
    int number, reverse = 0;
    std::cout << "Enter number and I will reverse it! : ";
    std::cin >> number;
    int store = number;
    while (number > 0)
    {
        reverse = reverse * 10 + number % 10;
        number = number / 10;
    }
    std::cout << "The reverse of " << store << " is " << reverse;
    return 0;
}