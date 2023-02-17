#include<iostream>
using namespace std;

int fact(int a)
{
    if (a<=1)
    {
        return 1;
    }
    return a * fact(a-1);
}

int fib(long int a)
{
    if(a<2)
    {
        return 1;
    }
    return fib(a-2) + fib(a-1);
}

int main()
{
    int a;
    cout<<"Enter the term in the series of fibonacci sequence, 'a' ";
    cin>>a;
    cout<<"The term in fibonacci sequence at position "<<a<<" is "<<fib(a)<<endl;

    // cout<<"Enter any number to calculate it's factorial"<<endl;
    // cin>>a;

    // cout<<a<<"! is: "<<fact(a)<<endl;
    return 0;
}