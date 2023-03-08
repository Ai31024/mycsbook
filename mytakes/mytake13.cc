/*Three lamps, one button. once pressed will light lamp1, and further pressing will shift the power from previous lamp to later lamp.*/
#include<iostream>
int main()
{
    std::cout<<"---     ---     ---"<<std::endl;
    char button;
    while(button != 'q')
    {
        std::cin>>button;
        std::cout<<"|||     ---     ---"<<std::endl;
        std::cout<<"---     |||     ---"<<std::endl;
        std::cout<<"---     ---     |||"<<std::endl;

    }
    return 0;
}