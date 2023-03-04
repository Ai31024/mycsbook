#include <iostream>
using namespace std;
int main(int argc, char const *argv[])
{
    /* loops in C++:
    There are 3 types of loops in C++:
        1. For loop
        2. While loop
        3. Do-while loop
    We want a loop whose process can be controlled in a specified manner. An uncontrollable loop is not desirable as its process continue forever, aimlessly.
    */
    // for-loop:

    // syntax of 'for-loop':
    /*
    for(initialization; condition; updation)
    {
        loop body;
    }
    */

    /*
    for (int i = 0; i < 10; i++)
    {
        cout<<i<<endl;
    }
    */
    // while-loop: This loop runs code very fastly, this speed might cause system crash.

    // syntax of 'while-loop':
    /*
    (initialization);
    while(condition)
    {
        C++ statement;
        updation code;
    }
    */
    /*
    int a = 0;
    while (a<=40)
    {
        cout<<a<<endl;
        a+=10;
    }
    */
    // do-while loop: This loop runs code atleast one time even if the while condition is false. this loop function is more stable as it runs slower than while loop.

    // syntax of 'do-while loop':
    /*
    (initialization);
    do
    {
        C++ statement;
        Updation code;
    }
    while(condition);
    */
    /*
    int i = 0;
    do
    {
        cout<<i<<endl;
        i+=10;
    }
    while (i<=40);
    */

    int num;
    cout << "Enter a number for multiplication table till ten : ";
    cin >> num;

    int i = 0;
    do
    {
        cout << num << " x " << i << " = " << num * i << endl;
        i++;
    } while (i <= 10);
    return 0;
}