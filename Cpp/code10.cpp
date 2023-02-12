// Arrays and Pointers in C++:
#include<iostream>
using namespace std;

int main()
{
    int box[4]={12, 32, 33, 21};
    // cout<<box[0]<<endl;
    // cout<<box[2]<<endl;
    // cout<<box[3]<<endl;
    // writing cout for every element manually is not feasible. lets use for-loop
    for (int i = 0; i < 4; i++)
    {
        cout<<box[i]<<endl;
    }
    
    
    return 0;
}