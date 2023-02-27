#include<iostream>
#include<iomanip>
using namespace std;
int main(){
    // ----- Constants, Manipulators & Operator precedence-----

    // In the following code we can see it is easy to change the value of a variable

    // int a = 34;
    // cout<<"Value of 'a' was: "<<a<<endl;
    // a = 45;
    // cout<<"Value of 'a' is : "<<a<<endl;

    // if we want to make a variable into constant, then we should use const before writing variable. See below.

    // const int a = 35; // variable 'a' is now constant and cannot be changed. Constants are read-only.
    // cout<<"Value of a is set to : "<<a<<endl;
    // a = 50;
    // cout<<"Value of a cannot change"<<a<<endl;

    // int a = 10, b = 123, c = 1024;

    // cout<<"The value of a is: "<<a<<endl;
    // cout<<"The value of b is: "<<b<<endl;
    // cout<<"The value of c is: "<<c<<endl;

    // setw(size of width) is 'set width' function, this function right justifies the value in it. it is implemented as shown below.

    // cout<<"The value of a is: "<<setw(10)<<a<<endl;
    // cout<<"The value of b is: "<<setw(10)<<b<<endl;
    // cout<<"The value of c is: "<<setw(10)<<c<<endl;

    // operator precedence:

    // int a = 3, b = 4;
    // int c = (a*5)+b; // Ignore this
    // int c = ((a*5)+b)-45+87;
    // cout<<c<<endl;

    return 0;
}