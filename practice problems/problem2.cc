/*The distance between two cities (in KM.) is input through the keyboard.
Write a program to convert and print this distance in meters, feet, inches and centimeters*/

#include <iostream>
int main()
{
    int distance;
    std::cout << "Enter distance between two cities (in KM) : ";
    std::cin >> distance;
    std::cout << "You have entered distance between two cities equal to : " << distance << " Kilometers\n";
    std::cout << "Distance between two cities in meters = " << distance * 1000 << " meters\n";
    std::cout << "Distance between two cities in feet = " << distance * 1000 * 3.28 << " feet\n";
    std::cout << "Distance between two cities in inches = " << distance * 1000 * 39.37 << " inches\n";
    std::cout << "Distance between two cities in centimeters = " << distance * 100000 << " centimeters\n";
    return 0;
}