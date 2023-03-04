#include <iostream>
using namespace std;

// calling by value:
void swapvalue(int a, int b)
{
    int temp = a;
    a = b;
    b = temp;
}

// calling by reference using pointer:
void swapvaluepointer(int *a, int *b)
{
    int temp = *a;
    *a = *b;
    *b = temp;
}

// calling by reference using C++ reference variable:
void swapvalueRefVar(int &a, int &b)
{
    int temp = a;
    a = b;
    b = temp;
}

int main()
{
    int a = 3, b = 4;
    cout << "Value of 'a' is " << a << " and value of 'b' is " << b << endl;

    // swapvalue(a, b); // this will not swap a and b.
    // swapvaluepointer(&a, &b); // this will swap a and b using pointers reference.
    swapvalueRefVar(a, b); // this will swap a and b using reference variable. This is easier than using pointer reference.
    cout << "Now the value of 'a' is " << a << " and value of 'b' is " << b << endl;

    return 0;
}