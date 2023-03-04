// Swapping number without using third variable or using pointers and reference
#include <iostream>
int main()
{
    int a, b;
    std::cout << "Enter value of a : ";
    std::cin >> a;
    std::cout << "Enter value of b : ";
    std::cin >> b;
    std::cout << "a: " << a - a + b << " b: " << b - b + a << "\n";
    return 0;
}