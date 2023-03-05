#include <iostream>
int main()
{
    int a;
    std::cout << "Enter a: ";
    std::cin >> a;
    if (a >= 0 && a <= 100)
    {
        a = a;
    }
    if (a < 0)
    {
        a = 0;
    }
    if (a > 100)
    {
        a = 100;
    }
    std::cout << a << std::endl;
    return 0;
}

// OK.