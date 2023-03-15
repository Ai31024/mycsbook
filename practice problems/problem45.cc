/*Write a program to print all prime numbers from 1 to 300.
(Hint: Use nested loops, break and continue)*/
#include <iostream>
int main()
{
    for (int i = 2; i <= 300; i++)
    {
        bool prime = true;
        for (int j = 2; j * j <= i; j++)
        {
            if (i % j == 0)
            {
                prime = false;
                break;
            }
        }
        if (prime == true)
        {
            std::cout << i << " ";
        }
    }
    return 0;
}