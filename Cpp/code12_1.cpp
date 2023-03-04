#include <iostream>
using namespace std;

int sum(int a, int b)
{
    int c;
    c = a + b;
    return c;
}

int main()
{
    int a1, a2;

    cout << "Enter value 1" << endl;
    cin >> a1;

    cout << "Enter value 2" << endl;
    cin >> a2;

    cout << "Sum of " << a1 << " and " << a2 << " is : " << sum(a1, a2) << endl;

    return 0;
}