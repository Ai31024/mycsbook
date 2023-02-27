/*Paper of size A0 has dimensions 1189 mm x 841 mm.
Each subsequent size A(n) is defined as A(n-1) cut in half parallel to its shorter sides.
Thus paper of size A1 would have dimensions 841 mm x 594 mm.
Write a program to calculate and print paper sizes A0, A1, A2, ... A8.*/

#include <iostream>
int main()
{
    int length = 1189, width = 841, x;
    for (int i = 0; i <= 8; i++)
    {
        std::cout << "Paper size of A" << i << " is : " << length << " mm x " << width << " mm\n";
        x = length;
        length = width;
        width = x / 2;
    }
    return 0;
}