/*Ramesh's basic salary is input through the keyboard. His dearness allowance is 40% of basic salary
and house rent allowance is 20% of basic salary. Write a program to calculate his gross salary */

#include <iostream>
int main()
{
    int salary;
    std::cout << "Hello Ramesh, Please enter your basic salary = ";
    std::cin >> salary;
    std::cout << "Your dearness allowance is 40 percent = " << (salary * 0.4) << "\n";
    std::cout << "And your rent allowance is 20 percent = " << (salary * 0.2) << "\n";
    std::cout << "Your Gross salary is = " << salary + (salary * 0.4) + (salary * 0.2) << "\n";

    return 0;
}