#include <iostream>
int main()
{
    int number[5];
    int sum = 0;
    for (int i = 0; i < 5; i++)
    {
        std::cout << "Enter value of number " << i << " = ";
        std::cin >> number[i];
        sum += number[i];
    }
    std::cout << "The sum of all numbers are : " << sum;
    return 0;
}