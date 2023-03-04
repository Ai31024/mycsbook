// Header files & Operators
#include <iostream>
#include "myheader.h"
using namespace std;
int main(int argc, char const *argv[])
{
    int a = 10, b = 5;
    cout << "Operators in C++" << endl;

    // arithmetic operators

    cout << "a + b :" << a + b << endl; // sum operator
    cout << "a - b :" << a - b << endl; // minus operator
    cout << "a / b :" << a / b << endl; // division operator
    cout << "a x b :" << a * b << endl; // multiplication operator
    cout << "a % b :" << a % b << endl; // modulus operator
    cout << "a ++ :" << a++ << endl;    // increment after print operator
    cout << "a -- :" << a-- << endl;    // decrement after print operator
    cout << "++ a :" << ++a << endl;    // increment before print operator
    cout << "-- a :" << --a << endl;    // decrement before print operator

    // Assignment operator, it is used to assign values to variables.

    // int a = 2, b= 4;
    // char d = 'd';

    // Comparision operator, it is used to one compare value with another. Answer comes in boolean.

    // (<) less than
    cout << "is a < b ? :" << (a < b) << endl;
    // (>) greater than
    cout << "is a > b ? :" << (a > b) << endl;
    // (<=) less or equal to
    cout << "is a <= b ? :" << (a <= b) << endl;
    // (>=) greater or equal to
    cout << "is a >= b ? :" << (a >= b) << endl;
    // (==) equal to
    cout << "is a == b ? :" << (a == b) << endl;
    // (!=) not equal to
    cout << "is a != b ? :" << (a != b) << endl;

    // Logical operators, followings are logical operators in C++

    // (&&) AND logic operator, both condition must be true for logic 1 answer.
    cout << "are (a < b) AND (a > b) true? : " << ((a < b) && (a > b)) << endl;
    // (||) OR logic operator, both condition must be false for logic 0 answer.
    cout << "are (a < b) OR (a > b) true? : " << ((a < b) || (a > b)) << endl;
    // (!) NOT logic operator, it inverts the actual logic answer.
    cout << "(a<b) is 0 so, !(a<b) is " << (!(a < b)) << endl;
    return 0;
}