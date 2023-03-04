/*A circle with radius r and it's center having coordinate x and y,
Write a program to check if any entered coordinate through keyboard
lies inside, on or outside the circle.*/
#include <iostream>
#include <cmath>
int main()
{
    int input_center_x, input_center_y, input_axis_x, input_axis_y, radius, distance;
    std::cout << "Enter x coordinate for circle's center: ";
    std::cin >> input_center_x;
    std::cout << "Enter y coordinate for circle's center: ";
    std::cin >> input_center_y;
    std::cout << "Enter the radius of the circle: ";
    std::cin >> radius;
    std::cout << "Enter x coordinate of your point: ";
    std::cin >> input_axis_x;
    std::cout << "Enter y coordinate of your point: ";
    std::cin >> input_axis_y;
    distance = sqrt(pow((input_axis_x - input_center_x), 2) + pow((input_axis_y - input_center_y), 2));
    if (distance > radius)
    {
        std::cout << "Entered point lies outside of circle perimeter";
    }
    else if (distance == radius)
    {
        std::cout << "Entered point lies on the circle perimeter";
    }
    else
    {
        std::cout << "Entered point lies inside the circle perimeter";
    }
    return 0;
}