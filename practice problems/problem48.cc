/*
When interest compounds q times per year at an annual rate of r % for n years,
the principle p compounds to an amount a as per the following formula:
a = p ( 1 + r / q ) ^ n * q
Write a program to read 10 sets of p, r, n & q and calculate the corresponding a.
*/
#include <iostream>
#include <cmath>
int main()
{
    float q, r, p, a;
    int n;
    std::cout << "Enter q: ";
    std::cin >> q;
    std::cout << "Enter r: ";
    std::cin >> r;
    std::cout << "Enter p: ";
    std::cin >> p;
    std::cout << "Enter n: ";
    std::cin >> n;
    a = pow(p * (1 + r / q), n * q);
    std::cout << a;
    return 0;
}

// I didn't understand this question.