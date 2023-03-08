/*Write a program to calculate overtime pay of 10 employees.
Overtime is paid at the rate of Rs. 12.00 per hour for every hour
worked above 40 hours. Assume that employees do not work for
fractional part of an hour.*/
#include <iostream>
int main()
{
    float overtime;
    int hour, i = 1;
    while(i<=10)
    {
        std::cout<<"Enter the number of hours worked: ";
        std::cin>>hour;
        if(hour>40)
        {
            overtime = (hour-40)*12;
            std::cout<<"You have worked overtime, Hours worked is "<<hour<<" your overtime payment is: "<<overtime<<std::endl;
        }
        else
        {
            std::cout<<"You have worked normally, Hours worked is "<<hour<<" No overtime payment."<<std::endl;
        }
        i++;
    }
    return 0;
}