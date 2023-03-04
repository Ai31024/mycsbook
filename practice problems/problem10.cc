// Write a program to receive Cartesian Co-Ordinates (x, y) of a point and
// convert them into Polar Co-Ordinates (r, 0)
// hint: r = sqrt(x^2 + y^2) and 0 = tan^-1(y / x).
#include <iostream>
#include <cmath>
int main()
{
    float cartesian_x, cartesian_y, polar_r, polar_0;
    std::cout << "Input Cartesian Co-Ordinates:\n";
    std::cout << "Co-Ordinate for x - axis: ";
    std::cin >> cartesian_x;
    std::cout << "Co-Ordinate for y - axis: ";
    std::cin >> cartesian_y;
    std::cout << "Entered Cartesian Co-Ordinates are: (" << cartesian_x << ", " << cartesian_y << ")\n";
    polar_r = sqrt(pow(cartesian_x, 2) + pow(cartesian_y, 2));
    polar_0 = atan(cartesian_x / cartesian_y);
    std::cout << "The Polar Equivalent of given Cartesian Co-Ordinate is: " << polar_r << "\n";
    std::cout << "The Polar Equivalent of given Cartesian Co-Ordinate is: " << polar_0 << "\n";
    std::cout << "Polar Co-Ordinates are: (" << polar_r << ", " << polar_0 << ")" << std::endl;
}