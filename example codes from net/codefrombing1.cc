#include <iostream>
using namespace std;

int main()
{
    // Initialize the dimensions of A0 paper in mm
    int x = 841;
    int y = 1189;

    // Loop from A0 to A8
    for (int i = 0; i <= 8; i++)
    {
        // Print the current paper size
        cout << "A" << i << ": " << x << " x " << y << endl;

        // Check which dimension is bigger and divide it by two
        if (x > y)
        {
            x /= 2;
        }
        else
        {
            y /= 2;
        }
    }

    return 0;
}