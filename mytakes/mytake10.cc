#include <iostream>
#include <cmath>

int main()
{
    int side[3];
    float semi_perimeter, temporary = 1.0, area;

    for (int i = 0; i < 3; i++)
    {
        std::cout << "Enter length of side " << i + 1 << " = ";
        std::cin >> side[i];
    }

    for (int j = 0; j < 3; j++)
    {
        semi_perimeter += side[j];
    }
    semi_perimeter = semi_perimeter / 2;

    // std::cout<<"semi : "<<semi_perimeter<<"\n";

    for (int k = 0; k < 3; k++)
    {
        temporary *= semi_perimeter - side[k];
    }

    area = sqrt(semi_perimeter * temporary);

    std::cout << "The area of triangle is: " << area;
    return 0;
}