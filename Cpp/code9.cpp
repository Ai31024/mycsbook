// Pointers in C++:
#include <iostream>
using namespace std;

int main()
{
    // pointers, reference, dereference:
    int a = 1;                                          // initializing integer
    int *b = &a;                                        // initializing pointer
    cout << "Address of 'a' : " << &a << endl;          // using reference
    cout << "Address of 'a' : " << b << endl;           // using pointer
    cout << "Value at address of 'b' : " << *b << endl; // using dereference operator
    // pointer to pointer:
    int **c = &b;                                                          // initializing pointer to pointer
    cout << "address of 'b' : " << &b << endl;                             // using reference to pointer
    cout << "address of 'b' : " << c << endl;                              // using pointer to pointer
    cout << "value at address of 'c' : " << *c << endl;                    // using dereference operator
    cout << "value at address of 'c' at address of 'b' : " << **c << endl; // using double dereference operator

    return 0;
}