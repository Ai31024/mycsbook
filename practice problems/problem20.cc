/*A five-digit number is entered through the keyboard.
Write a problem to obtain the reversed number and
to determine whether the original and reversed numbers are equal or not*/
#include<iostream>
int main()
{
    int number, rebmun, store, check;
    std::cout<<"Enter number: ";
    std::cin>>number;
    store = number;
    while(number>0)
    {
        rebmun=rebmun*10+number%10;
        number=number/10;
    }
    std::cout<<"reverse number is: "<<rebmun<<std::endl;
    if(store==rebmun)
    {
        std::cout<<"Both number and it's reverse is equal."<<std::endl;
    }
    return 0;
}