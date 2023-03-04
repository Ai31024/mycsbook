/*Given three x and y coordinate, check if it is colinear*/
#include <iostream>
int main()
{
    int x_axis_1, x_axis_2, x_axis_3, y_axis_1, y_axis_2, y_axis_3;
    std::cout << "enter coordinate of x1 = ";
    std::cin >> x_axis_1;
    std::cout << "enter coordinate of y1 = ";
    std::cin >> y_axis_1;
    std::cout << "enter coordinate of x2 = ";
    std::cin >> x_axis_2;
    std::cout << "enter coordinate of y2 = ";
    std::cin >> y_axis_2;
    std::cout << "enter coordinate of x3 = ";
    std::cin >> x_axis_3;
    std::cout << "enter coordinate of y3 = ";
    std::cin >> y_axis_3;
    if ((y_axis_3 - y_axis_2) * (x_axis_2 - x_axis_1) == (y_axis_2 - y_axis_1) * (x_axis_3 - x_axis_2))
    {
        std::cout << "Entered coordinate points are Co-linear" << std::endl;
    }
    else
    {
        std::cout << "Entered coordinate points are not Co-linear" << std::endl;
    }
    return 0;
}