/*If age of three people are entered through keyboard.
Write a program to find the youngest among them.*/
#include <iostream>
int main()
{
    int person[3];
    for (int i = 0; i < 3; i++)
    {
        std::cout << "Enter age of Person " << i + 1 << "\n";
        std::cin >> person[i];
    }
    if (person[0] < person[1] && person[0] < person[2])
    {
        std::cout << "Person 1 is youngest." << std::endl;
    }
    else if (person[1] < person[2])
    {
        std::cout << "Person 2 is youngest." << std::endl;
    }
    else
    {
        std::cout << "Person 3 is youngest." << std::endl;
    }
    return 0;
}