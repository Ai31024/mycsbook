// Function Overloading:
#include <iostream>
using namespace std;
int sum(int a, int b)
{
    cout << "\nUsing function with two arguments: ";
    return a + b;
}
int sum(int a, int b, int c)
{
    cout << "\nUsing function with three arguments is: ";
    return a + b + c;
}

int area(int l, int b)
{
    cout << "\nFinding area of a square or rectangle is: ";
    return l * b;
}

int area(double r)
{
    cout << "\nFinding area of a circle: ";
    return (3.14 * r * r);
}

int volume(int l, int b, int h)
{
    cout << "\nFinding volume of a block: ";
    return l * b * h;
}

int volume(double r, int h)
{
    cout << "\nFinding volume of a cylinder: ";
    return (3.14 * r * r * h);
}

int main()
{
    cout << "The sum of 3 and 6 by " << sum(3, 6) << endl;
    cout << "The sum of 3, 4 and 6 by " << sum(3, 4, 6) << endl;

    cout << "The area of a rectangle with lenght 5cm and height 4cm is: " << area(5, 4) << " cm^2 " << endl;

    cout << "The area of a circle with radius 10cm is: " << area(10) << " cm^2 " << endl;

    cout << "The volume of a block with lenght 5cm, height 4cm and breath 3cm is: " << volume(5, 4, 3) << " cm^3 " << endl;

    cout << "The volume of a cylinder with radius 10cm and height 20cm is: " << volume(10, 20) << " cm^3 " << endl;

    return 0;
}