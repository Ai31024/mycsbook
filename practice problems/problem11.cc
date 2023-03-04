/*Write a program to receive values of latitude (L1, L2) and longitude (G1, G2), in degrees,
of two places on Earth and output the distance (D) between them in nautical miles.
Hint: D = 3963 cos^-1(sin L1 * sin L2 + cos L1 cos L2 * cos (G2-G1))*/
#include <iostream>
#include <cmath>
int main()
{
    float latitude_L1, latitude_L2, longitude_G1, longitude_G2, distance_D;

    std::cout << "Enter latitude and longitude of two places\n\n";

    std::cout << "Place 1:\n";

    std::cout << "Latitude L1: ";
    std::cin >> latitude_L1;
    std::cout << "Longitude G1: ";
    std::cin >> longitude_G1;

    std::cout << "Place 2:\n";

    std::cout << "Latitude L2: ";
    std::cin >> latitude_L2;
    std::cout << "Longitude G2: ";
    std::cin >> longitude_G2;

    // Very Important Formula!
    distance_D = 3963 * acos(((sin(latitude_L1) * sin(latitude_L2)) + (cos(latitude_L1) * cos(latitude_L2))) * cos(longitude_G1 - longitude_G2));

    std::cout << "The distance between two places is: " << distance_D << " Nautical miles" << std::endl;

    return 0;
}