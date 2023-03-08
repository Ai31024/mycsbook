/*Write a program to print all the ASCII values and their equivalent characters using a while loop.
The ASCII values vary from 0 to 255.*/
#include <iostream>
int main()
{
    int i = 0;
    while (i <= 255)
    {
        std::cout << "ASCII no. " << i << " is equal to " << char(i) << std::endl;
        i++;
    }
    return 0;
}