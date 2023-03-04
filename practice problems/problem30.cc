/*If the three sides of a triangle are entered through the keyboard,
Write a program to check whether the triabgle is valid or not.
The triangle is valid if the sum of two side is greater than
the largest of the three sides.*/
#include<iostream>
int main()
{
    int side_1, side_2, side_3, greater_side;
    std::cout<<"Input side 1: ";
    std::cin>> side_1;
    std::cout<<"Input side 2: ";
    std::cin>>side_2;
    std::cout<<"Input side 3: ";
    std::cin>>side_3;
    if(side_1>side_2 && side_1>side_3)
    {
        greater_side = side_1;
    }
    else if(side_2>side_3)
    {
        greater_side=side_2;
    }
    else
    {
        greater_side=side_3;
    }
    
    if((side_1+side_2)&&(side_2+side_3)&&(side_1+side_3) > greater_side)
    {
        std::cout<<"This triangle is valid."<<std::endl;
    }
    else
    {
        std::cout<<"This triangle is Invalid."<<std::endl;
    }

    return 0;
}