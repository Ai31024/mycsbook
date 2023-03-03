/*Given a coordinate point x and y, write a program to check if it lies on origin.*/
#include<iostream>
int main()
{
    int input_x_axis, input_y_axis;
    std::cout<<"Enter X axis: ";
    std::cin>>input_x_axis;
    std::cout<<"Enter Y axis: ";
    std::cin>>input_y_axis;
    if(input_x_axis == 0 && input_y_axis == 0)
    {
        std::cout<<"The entered coordinate lies on the origin."<<std::endl;
    }
    else
    {
        std::cout<<"The entered coordinate doesn't lie on the origin."<<std::endl;
    }
    return 0;
}