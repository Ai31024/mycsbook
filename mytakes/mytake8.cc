#include<iostream>
int main(){
    const int num = 1234;
    int number = num;
    int reverse = 0;
    while(number>0){
        reverse = reverse * 10 + number % 10;
        number = number / 10;
    }

    std::cout<<"Number was: "<<num<<" it's reverse is: "<<reverse<<"\n";
    return 0;
}