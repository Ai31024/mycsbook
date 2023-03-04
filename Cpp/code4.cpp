#include <iostream>
using namespace std;
int c = 45;
int main()
{
    // ----- Scope resolution operator -----

    // int a, b, c;
    // cout<<"Enter the value of a: "<<endl;
    // cin>>a;
    // cout<<"Enter the value of b: "<<endl;
    // cin>>b;
    // c = a + b; // this c is a local variable
    // cout<<"The sum is "<<c<<endl;
    // cout<<"The global c is "<<::c<<endl; // this calls global c using scope resolution operator (::)

    // ----- Float and long double -----
    // float d = 34.4;
    // long double e = 34.4;
    // cout<<"The value of d is "<<d<<endl<<"The value of e is "<<e<<endl;

    // ----- Float, double and long double Literals -----
    // cout<<"The size of 34.4 is "<<sizeof(34.4)<<endl;
    // cout<<"The size of 34.4f is "<<sizeof(34.4f)<<endl;
    // cout<<"The size of 34.4F is "<<sizeof(34.4F)<<endl;
    // cout<<"The size of 34.4l is "<<sizeof(34.4l)<<endl;
    // cout<<"The size of 34.4L is "<<sizeof(34.4L)<<endl;

    // ----- Reference Variables -----
    // float x = 455;
    // float & y = x;
    // cout<<x<<endl;
    // cout<<y<<endl;

    // ----- TypeCasting -----
    int a = 45;
    float b = 45.33;
    cout << "the value of a is " << (float)a << endl; // a is seen as float value only for this case.
    cout << "the value of b is " << (int)b << endl;   // b is seen as integer value only for this case.

    // ----- Examples of typecasting related to above -----

    // int c = int(b); // here c and b is taken as integer.
    // cout<<c<<endl;

    // int c = b; // here c is taken as integer.
    // cout<<c<<endl;

    // float c = b; // In memory, b is saved as float.
    // cout<<c<<endl;

    return 0;
}