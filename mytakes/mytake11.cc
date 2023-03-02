#include <iostream>
#include <cmath>

double celcius_to_fahrenheit(double celcius)
{
    return celcius * 9 / 5 + 32;
}

double fahrenheit_to_celcius(double fahrenheit)
{
    return (fahrenheit - 32) * 5 / 9;
}

double kmh_to_mph(double kmh)
{
    return kmh*0.6214;
}

double wind_chill_factor(double temperature, double velocity)
{
    double temperature_fahrenheit = celcius_to_fahrenheit(temperature);
    double velocity_mph = kmh_to_mph(velocity);
    double wind_chill = 35.74 + 0.6215 * temperature_fahrenheit + (0.4275*temperature_fahrenheit - 35.75) * pow(velocity_mph, 0.16);
    return fahrenheit_to_celcius(wind_chill);
}

int main()
{
    std::cout<<"Enter temperature in Celcius: ";
    double temperature;
    std::cin>>temperature;

    std::cout<<"Enter wind velocity in KM per hour: ";
    double velocity;
    std::cin>>temperature;

    double chill = wind_chill_factor(temperature, velocity);
    std::cout<<"The wind chill factor is: "<<chill<<" degree celcius."<<std::endl;
    return 0;
}