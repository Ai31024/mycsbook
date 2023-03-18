/*Write a program to print the multiplication table of the number entered by the user.
The table should get displayed in the following form:

29 * 1 = 29
29 * 2 = 58 ...
*/

#include <iostream>
int main()
{
    int number, multiple;
    std::cout << "Enter Number to generate multiplication table: ";
    std::cin >> number;
    std::cout << "Enter how long the multiplication table to be: ";
    std::cin >> multiple;
    for (int i = 1; i <= multiple; i++)
    {
        std::cout << number << " * " << i << " = " << number * i << "\n";
    }
    return 0;
}