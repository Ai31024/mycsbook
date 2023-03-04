/*Write a program to check if a triangle is valid or
not by checking it's entered angles*/
#include <iostream>
int main()
{
    int tri_angle[3];
    for (int i = 0; i < 3; i++)
    {
        std::cout << "Enter angle " << i + 1 << " :\n";
        std::cin >> tri_angle[i];
    }
    if (tri_angle[0] + tri_angle[1] + tri_angle[2] == 180)
    {
        std::cout << "This is a valid triangle." << std::endl;
    }
    else
    {
        std::cout << "This is not a valid triangle, because sum of three angle is : " << tri_angle[0] + tri_angle[1] + tri_angle[2] << "\n";
        std::cout << "Which is not equal to 180 degrees!" << std::endl;
    }
    return 0;
}