#include<iostream>
using namespace std;
int main()
{
    int j;
    for (j = 65; j < 91; j++)
    {
        cout<<(char)j<<" ";
        cout<<endl;
        for (j = 65; j < 91; j++)
        {
            printf ("%c ",j);
        }
    }
    
    return 0;
}