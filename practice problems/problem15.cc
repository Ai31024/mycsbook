/*Consider a currency system in which there are notes of seven denominations,
namely, Rs. 1, Rs. 2, Rs. 5, Rs. 10,Rs. 20, Rs. 50, Rs. 100.
If a sum of Rs. N is entered through the keyboard,
Write a program to compute the smallest number of notes that will combine to give Rs. N*/
#include<iostream>
int main()
{
    int n1, n2, n5, n10, n20, n50, n100, number, store;
    std::cout<<"Enter the sum of money: ";
    std::cin>>number;
    store = number;

    n100 = number / 100;
    number = number % 100;

    n50 = number / 50;
    number = number % 50;

    n20 = number / 20;
    number = number % 20;

    n10 = number / 10;
    number = number % 10;

    n5 = number / 5;
    number = number % 5;

    n2 = number / 2;
    number = number % 2;

    n1 = number / 1;
    number = number % 1;

    std::cout<<"To get money sum as: "<<store<<"\nYou have to give\n";
    std::cout<<"Denomination of 100: "<<n100<<"\n";
    std::cout<<"Denomination of 50: "<<n50<<"\n";
    std::cout<<"Denomination of 20: "<<n20<<"\n";
    std::cout<<"Denomination of 10: "<<n10<<"\n";
    std::cout<<"Denomination of 5: "<<n5<<"\n";
    std::cout<<"Denomination of 2: "<<n2<<"\n";
    std::cout<<"Denomination of 1: "<<n1<<"\n";

    return 0;

}