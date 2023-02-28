//Multiple Parameter.
#include<iostream>
void name_age(std::string name, int age)
{
    std::cout<<name<<" Irshad"<<", age : "<<age<<"\n";
}
int main()
{
    name_age("Azam", 26);
    name_age("Zainab", 23);
    name_age("Ahamd", 20);
    name_age("Mariyam", 15);
    return 0;
}