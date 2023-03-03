/*Check for leap year but using more complex control flow method*/
#include <iostream>
int main()
{
    int year;
    std::cout << "Input an year: ";
    std::cin >> year;
    if((year%400==0) || (year%4==0) && (year%100!=0))
    {
        std::cout<<"It's a leap year"<<std::endl;
    }
    else
    {
        std::cout<<"It's a normal year"<<std::endl;
    }
    return 0;
}