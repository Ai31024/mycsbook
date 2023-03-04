// Calculator in C++:

#include <iostream>
using namespace std;

// invoking function prototype.

void hello();
void action();
int sum(int, int);
int sub(int, int);
int mul(int, int);
int dvi(int, int);

// main block

int main()
{
    hello(); // hello function

    int a, b; // actual parameters
    cout << "Enter value of 'a' : " << endl;
    cin >> a;
    cout << "Enter value of 'b' : " << endl;
    cin >> b;

    action(); // action function

    int s; // actual parameters
    cout << "Choose from option:\n1.sum\t2.sub\n3.mul\t4.dvi" << endl;
    cin >> s;

    switch (s) // switch case
    {
    case 1:
        cout << "The sum of " << a << " and " << b << " is: " << sum(a, b) << endl;
        break;
    case 2:
        cout << "The sub of " << a << " and " << b << " is: " << sub(a, b) << endl;
        break;
    case 3:
        cout << "The mul of " << a << " and " << b << " is: " << mul(a, b) << endl;
        break;
    case 4:
        cout << "The dvi of " << a << " and " << b << " is: " << dvi(a, b) << endl;
        break;

    default:
        cout << "Please select the correct choice!";
        break;
    }

    return 0;
}

// action function block
void action()
{
    cout << "Please select an operation" << endl;
}

// hello function block
void hello()
{
    cout << "Hello, please enter two values for calculation!" << endl;
}

// sum function block
int sum(int a, int b)
{
    int c;
    c = a + b;
    return c;
}

// sub function block
int sub(int a, int b)
{
    int c;
    c = a - b;
    return c;
}

// mul function block
int mul(int a, int b)
{
    int c;
    c = a * b;
    return c;
}

// dvi function block
int dvi(int a, int b)
{
    float c;
    c = a / b;
    return c;
}