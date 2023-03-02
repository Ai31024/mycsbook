/*If value of an angle is input through the keyboard,
write a program to print all it's Trignometric ratios.*/
#include<iostream>
#include<cmath>
int main()
{
    float angle;
    std::cout<<"Enter value of an angle: ";
    std::cin>>angle;
    std::cout<<"cos("<<angle<<") is : "<<cos(angle)<<"\n";
    std::cout<<"sin("<<angle<<") is : "<<sin(angle)<<"\n";
    std::cout<<"tan("<<angle<<") is : "<<tan(angle)<<"\n";
    std::cout<<"cos^-1("<<angle<<") is : "<<acos(angle)<<"\n";
    std::cout<<"sin^-1("<<angle<<") is : "<<asin(angle)<<"\n";
    std::cout<<"tan^-1("<<angle<<") is : "<<atan(angle)<<std::endl;
    return 0;
}