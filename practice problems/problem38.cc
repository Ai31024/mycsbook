/*Two numbers are entered through the keyboard. Write a program to find the value of one number raised to the power of another.*/
#include <iostream>
int main()
{
    int number = 0, power = 0, num_pow = 1;
    std::cout << "Enter number: ";
    std::cin >> number;
    std::cout << "Enter the power: ";
    std::cin >> power;
    int i = power;
    while (i > 0)
    {
        num_pow *= number;
        i--;
    }
    std::cout << number << " ^ " << power << " is: " << num_pow << std::endl;
    return 0;
}