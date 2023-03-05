#include <iostream>
int limit_check(int colour)
{
    if (colour >= 0 && colour <= 255)
    {
        colour = colour;
    }
    if (colour < 0)
    {
        colour = 0;
    }
    if (colour > 255)
    {
        colour = 255;
    }
    return colour;
}
int main()
{
    int red;
    std::cout << "Input Red: ";
    std::cin >> red;
    red = limit_check(red);
    std::cout <<red;
    return 0;
}

// OK.