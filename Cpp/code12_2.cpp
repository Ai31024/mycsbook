#include<iostream>
using namespace std;

int sum(int a, int b);                                     // acceptable prototyping
// int sum(int, int);                                      // acceptable prototyping
// int sum(int a, b);                                      // un-acceptable prototyping

int main()
{
    int a1, a2;

    cout<<"Enter value 1"<<endl;
    cin>>a1;

    cout<<"Enter value 2"<<endl;
    cin>>a2;

    cout<<"Sum of "<<a1<<" and "<<a2<<" is : "<<sum(a1, a2)<<endl;
    
    return 0;
}

int sum(int a, int b)
{
    int c;
    c = a + b;
    return c;
}