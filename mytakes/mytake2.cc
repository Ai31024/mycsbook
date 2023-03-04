#include <iostream>

int main()
{
    int length = 1189, width = 841;

    for (int i = 0; i <= 8; i++)
    {
        std::cout << "A" << i << ": " << length << " x " << width << "\n";
        if (length > width)
        {
            length /= 2;
        }
        else
        {
            width /= 2;
        }
    }
    return 0;
}