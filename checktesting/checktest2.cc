#include<iostream>
float maxfn(float a, float b, float c)
{
    float maxvalue;
    if (a > b && a > c)
    {
        maxvalue = a;
    }
    else if (b > c)
    {
        maxvalue = b;
    }
    else
    {
        maxvalue = c;
    }
    return maxvalue;
}
int main()
{
    float C, M, Y;
    std::cout<<"Input C: ";
    std::cin>>C;
    std::cout<<"Input M: ";
    std::cin>>M;
    std::cout<<"Input Y: ";
    std::cin>>Y;

    std::cout<<maxfn(C/255,M/255,Y/255);
    return 0;
}

//Not OK