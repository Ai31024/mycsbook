/*Write a program to print out all Armstrong numbers between 1 and 500.
If sum of cubes of each digit of the number is equal to the number itself,
then the number is called an Armstrong number.

For example: 153 = (1 * 1 * 1) + (5 * 5 * 5) + (3 * 3 * 3)*/
#include <iostream>
int main()
{
    int number, repeat, sum, store;

    for (number = 1; number <= 500; number++)
    {
        store = number;
        sum = 0;

        while (store != 0)
        {
            repeat = store % 10;
            store = store / 10;
            sum = sum + (repeat * repeat * repeat);
        }

        if (sum == number)
        {
            std::cout << number << " ";
        }
    }

    return 0;
}