/*Write a program to receive an integer and find it's octal equivalent.*/

/*
Hint: To obtain octal equivalent of an integer, divide it continuosly by 8
till dividend doesn't become zero, then write the remainders obtained in
reverse direction.
*/

#include <iostream>
int main()
{
    int number = 0, final_octal = 0;
    std::cout << "Input a number to find it's octal: ";
    std::cin >> number;
    int remainder = 0, normal_octal = 0;
    while (number > 0)
    {
        remainder = number % 8;
        normal_octal = 10 * normal_octal + remainder;
        number = number / 8;
    }
    int reverse_remainder = 0;
    while (normal_octal > 0)
    {
        reverse_remainder = normal_octal % 10;
        final_octal = 10 * final_octal + reverse_remainder;
        normal_octal = normal_octal / 10;
    }
    std::cout << "The Octal Equivalent is " << final_octal;
    return 0;
}