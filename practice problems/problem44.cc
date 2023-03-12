/*Write a program to find the range of a set of numbers entered through a keyboard.
Range is the difference between the smallest and the biggest number in the list.*/
#include <iostream>
int main()
{
    int number = 0, length = 0, range = 0;
    std::cout << "Enter the length of the list for numbers : ";
    std::cin >> length;

    std::cout << "Enter the number 1 : ";
    std::cin >> number;
    int max_value = number, min_value = number;
    int i = 1;
    while (i < length)
    {
        std::cout << "Enter the number " << i + 1 << " : ";
        std::cin >> number;
        if (number > max_value)
        {
            max_value = number;
        }
        if (number < min_value)
        {
            min_value = number;
        }
        i++;
    }

    range = max_value - min_value;
    std::cout << "The range of this list is " << range;

    return 0;
}