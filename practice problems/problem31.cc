/*If the three sides of a triangle are entered through the keyboard,
write a program to check whether the triangle is isosceles, equilateral,
scalene or right angled triangle.*/
#include <iostream>
int greater_side(int side_1, int side_2, int side_3)
{
    int big_length;
    if (side_1 > side_2 && side_1 > side_3)
    {
        big_length = side_1;
    }
    else if (side_2 > side_3)
    {
        big_length = side_2;
    }
    else
    {
        big_length = side_3;
    }
    return big_length;
}

void length_check(int side_1, int side_2, int side_3)
{
    if ((side_1 + side_2) && (side_2 + side_3) && (side_1 + side_3) > greater_side(side_1, side_2, side_3))
    {
        // Entered values for sides makes a valid triangle
        // Continue.
    }
    else
    {
        std::cout << "Entered values makes Invalid triangle";
        exit(0);
    }
}

int main()
{
    int side_1, side_2, side_3;
    std::cout << "Enter side 1: ";
    std::cin >> side_1;
    std::cout << "Enter side 2: ";
    std::cin >> side_2;
    std::cout << "Enter side 3: ";
    std::cin >> side_3;

    length_check(side_1, side_2, side_3);

    if (side_1 == side_2 && side_2 == side_3)
    {
        std::cout << "It's an Equilateral Triangle." << std::endl;
    }
    else if (side_1 * side_1 + side_2 * side_2 == side_3 * side_3)
    {
        std::cout << "It's a Right angled Triangle." << std::endl;
    }
    // Error part vv
    else if ((side_1 == side_3) && (side_1 != side_2) || (side_2 == side_3) && (side_2 != side_1) || (side_1 == side_2) && (side_1 != side_2))
    {
        std::cout << "It's an Isoceles Triangle." << std::endl;
    }
    // need to solve it ^^
    else if ((side_1 * side_1 + side_2 * side_2 == side_3 * side_3) && (side_1 == side_2 || side_2 == side_3 || side_1 == side_3))
    {
        std::cout << "It's an Isoceles - Right angled triangle." << std::endl;
    }
    else
    {
        std::cout << "This is a Scalene Triangle." << std::endl;
    }

    return 0;
}