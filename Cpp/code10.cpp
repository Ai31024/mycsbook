// Arrays and Pointers in C++: https://www.github.com/Ai31024
#include <iostream>
using namespace std;

int main()
{
    int box[4] = {12, 32, 33, 21};
    // cout<<box[0]<<endl;
    // cout<<box[2]<<endl;
    // cout<<box[3]<<endl;
    // writing cout for every element manually is not feasible. lets use for-loop
    // for (int i = 0; i < 4; i++)
    // {
    //     cout<<"the value in box no. "<<i<<" is "<<box[i]<<endl;
    // }
    // writing same program using while loop.
    // int i = 0;
    // while(i<4){
    //     cout<<"the value in the box no. "<<i<<" is "<<box[i]<<endl;
    //     i++;
    // }
    // writing same program in do-while loop.
    // int i = 0;
    // do
    // {
    //     cout<<"the value in the box no. "<<i<<" is "<<box[i]<<endl;
    //     i++;
    // } while (i<4);

    int *p = box;

    // cout<<"the value of box[0] is : "<<*p<<endl;
    // cout<<"the value of box[1] is : "<<*(p+1)<<endl;
    // cout<<"the value of box[2] is : "<<*(p+2)<<endl;
    // cout<<"the value of box[3] is : "<<*(p+3)<<endl;
    // lets write this using for loop

    // for (int i = 0; i < 4; i++)
    // {
    //     cout<<"the value of box["<<i<<"]"<<" is : "<<*(p+i)<<endl;
    // }
    // lets write using while loop

    // int i = 0;
    // while(i<4)
    // {
    //     cout<<"the value of box["<<i<<"]"<<" is : "<<*(p+i)<<endl;
    //     i++;
    // }
    // lets write using do-while loop

    // int i = 0;
    // do
    // {
    //     cout<<"the value of box["<<i<<"]"<<" is : "<<*(p+i)<<endl;
    //     i++;
    // } while (i<4);

    // cout<<*p<<endl;
    // cout<<*(++p)<<endl;
    // cout<<*(p++)<<endl;
    // cout<<*p<<endl;

    cout << "The value at box[0] is : " << *p++ << endl;
    cout << "The value at box[1] is : " << *p++ << endl;
    cout << "The value at box[2] is : " << *p++ << endl;
    cout << "The value at box[3] is : " << *p++ << endl;
    // cout<<"The value at box[4] is : "<<*p++<<endl; we cannot go beyond the size of array using pointer or it will give nonsense output.

    return 0;
}