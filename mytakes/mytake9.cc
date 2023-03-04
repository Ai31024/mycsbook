#include <iostream>
int main()
{
    int number, sum = 0;
    std::cout << "How many variables do you need to add? : ";
    std::cin >> number;
    std::cout << "Please now enter " << number << " variables\n";
    int array[number];
    for (int num = 0; num < number; num++)
    {
        std::cout << "Enter value for variable " << num << " = ";
        std::cin >> array[num];
        sum += array[num];
    }
    std::cout << "The sum of all variables are : " << sum;
    return 0;
}