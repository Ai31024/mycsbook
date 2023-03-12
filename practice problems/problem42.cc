/*Write a program to enter numbers till the user wants.
At the end it should display the count of positive ,
negative and zeros entered.*/
#include <iostream>
int main()
{
    int input = 0;
    int positive = 0, negative = 0, zeros = 0;
    std::cout << "How many numbers do you want to add? ";
    std::cin >> input;
    int store = input;
    while (input > 0)
    {
        int numbers = 0;
        std::cout << "Enter the value for number\n";
        std::cin >> numbers;
        if (numbers > 0)
        {
            positive++;
        }
        else if (numbers < 0)
        {
            negative++;
        }
        else
        {
            zeros++;
        }
        input--;
    }
    std::cout << "You have entered " << positive << " positive numbers out of " << store << "\n";
    std::cout << "You have entered " << negative << " negative numbers out of " << store << "\n";
    std::cout << "You have entered " << zeros << " zeros numbers out of " << store << std::endl;
    return 0;
}