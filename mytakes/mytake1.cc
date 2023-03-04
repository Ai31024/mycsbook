#include <iostream>
using namespace std;

int main()
{
    // Initialization
    int length = 841, width = 1189;

    // Loop from 0 to 8
    for (int i = 0; i <= 8; i++)
    {
        // Printing current size
        cout << "A" << i << ": " << length << " x " << width << endl;

        // Checking which dimension is bigger
        if (length > width)
        {
            length /= 2;
        }
        else
        {
            width /= 2;
        }
    }

    return 0; // VERY IMPORTANT TO PUT RETURN 0 ON LAST
}