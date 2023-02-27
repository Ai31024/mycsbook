/*The lenght and breadth of a rectangle and radius of a circle are input through the keyboard.
Write a program to calculate the area and perimeter of the rectangle
and the area and circumference of the circle.*/

#include <iostream>
float rectangle_area(int a, int b)
{
    return a * b;
}
float rectangle_perimeter(int a, int b)
{
    return 2.0 * (a + b);
}
float circle_area(int a)
{
    return 3.14 * a * a;
}
float circle_circumference(int a)
{
    return 2.0 * 3.14 * a;
}
int main()
{
    int length, breadth, radius;
    std::cout << "Enter length of rectangle: ";
    std::cin >> length;
    std::cout << "Enter breadth of rectangle: ";
    std::cin >> breadth;
    std::cout << "Enter radius of rectangle: ";
    std::cin >> radius;
    std::cout << "Area of rectangle is: " << rectangle_area(length, breadth) << " units squared\n";
    std::cout << "Perimeter of rectangle is: " << rectangle_perimeter(length, breadth) << " units\n";
    std::cout << "Area of circle is: " << circle_area(radius) << " units squared\n";
    std::cout << "Circumference of circle is: " << circle_circumference(radius) << " units\n";
}