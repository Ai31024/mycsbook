/*Write a program to check if area of rectangle is greater than it's perimeter or not,
by using it's length and breadth*/
#include <iostream>
int main()
{
    int length, breadth;
    std::cout << "Enter length of rectangle: ";
    std::cin >> length;
    std::cout << "Enter breadth of rectangle: ";
    std::cin >> breadth;
    if ((length * breadth) > 2 * (length + breadth))
    {
        std::cout << "The area of rectangle is greater than it's perimeter\n";
        std::cout << length * breadth << " > " << 2 * (length + breadth) << std::endl;
    }
    else
    {
        std::cout << "The perimeter of rectangle is greater than it's area\n";
        std::cout << 2 * (length + breadth) << " > " << length * breadth << std::endl;
    }
    return 0;
}