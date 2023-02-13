#include<iostream>
using namespace std;

int main()
{
    enum meal {moring, afternoon, evening};
    
    meal t1 = moring;
    meal t2 = afternoon;
    meal t3 = evening;
    
    cout<<t1<<endl;
    cout<<t2<<endl;
    cout<<t3<<endl;

    return 0;
}