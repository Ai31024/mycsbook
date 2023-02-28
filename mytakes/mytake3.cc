#include<iostream>

int main()
{
    std::cout<<std::endl;
    int length = 1189, width = 841, hold;
    for(int i = 0; i <= 8; i++)
    {
        std::cout<<"A"<<i<<" : "<<length<<" mm x "<<width<<" mm\n";
        hold = length;
        length = width;
        width = hold / 2;
    }
    std::cout<<std::endl;
    return 0;
}