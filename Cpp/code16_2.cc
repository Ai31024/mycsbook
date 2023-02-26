// Function overloading:
#include<iostream>
using namespace std;

int volume(int a)
{
    return a * a * a;
}

int volume(double r, int h)
{
    return (3.14 * r * r * h);
}

int volume(int l, int b, int h)
{
    return l * b * h;
}


int main()
{
    cout<<"volume of a cube of 5 cm lenght is: "<<volume(5)<<endl;

    cout<<"volume of a cylinder of radius 5 cm and height 4 cm is: "<<volume(5, 4)<<endl;
    
    cout<<"volume of a block of lenght 5 cm, breath 4 cm and height 3 cm is: "<<volume(5, 4, 3)<<endl;

    return 0;
}