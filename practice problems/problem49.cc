/*Write a program to generate all Pythagorean triplets
with side length less than or equal to 30.*/

#include <iostream>
int main()
{
    int a, b, c = 0;
    int m = 2;
    int limit = 30;
    while (c < limit)
    {
        for (int n = 1; n < m; ++n)
        {
            a = m * m - n * n;
            b = 2 * m * n;
            c = m * m + n * n;

            if (c > limit)
            {
                break;
            }

            std::cout << a << " " << b << " " << c << "\n";
        }
        m++;
    }
    return 0;
}