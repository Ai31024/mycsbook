/*Wind chill factor is the felt air temperature on exposed skin due to wind.
The wind chill temperature is always lower than the air temperature and
is calculated as per the following formula:
wcf = 35.74 + 0.6215t + (0.4275t - 35.75) * v^0.16
where: t - temperature, v - wind velocity.
Write a program to receive values of t and v and calculate wind chill factor (wcf)*/
#include <iostream>
#include <cmath>
int main()
{
    float temperature_t, wind_velocity_v, wind_chill_factor_wcf;
    std::cout << "Enter values of Temperature and Wind velocity to calculate Wind Chill Factor\n";
    std::cout << "Temperature: ";
    std::cin >> temperature_t;
    std::cout << "Wind velocity: ";
    std::cin >> wind_velocity_v;
    wind_chill_factor_wcf = 35.74 + 0.6215 * temperature_t + ((0.4275 * temperature_t) - 35.75) * pow(wind_velocity_v, 0.16);
    std::cout << "Wind Chill Factor: " << wind_chill_factor_wcf << "\n";
}