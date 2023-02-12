//Pointers in C++:
#include<iostream>
using namespace std;

int main()
{
    int a = 1;
    int* b = &a;
    cout<<"Address of 'a' using 'address of' operator (&a) : "<<&a<<endl;
    cout<<"Address of 'a' using 'pointer b' variable (int* b = &a) --> (cout<<b) : "<<b<<endl;
    cout<<"Value of 'a' using 'dereference' operator applied to 'b' (*b) : "<<*b<<endl;
    return 0;
}