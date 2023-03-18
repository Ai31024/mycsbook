/*Write a program to generate all Pythagorean triplets
with side length less than or equal to 30.*/

#include <iostream>

void pythagoreanTriplets(int limit)
{

    // triplet: a^2 + b^2 = c^2
    int a, b, c = 0;

    // loop from 2 to max_limit
    int m = 2;

    // Limiting c would limit
    // all a, b and c
    while (c < limit)
    {

        // now loop on j from 1 to i-1
        for (int n = 1; n < m; ++n)
        {

            // Evaluate and print triplets using
            // the relation between a, b and c
            a = m * m - n * n;
            b = 2 * m * n;
            c = m * m + n * n;

            if (c > limit)
                break;

            printf("%d %d %d\n", a, b, c);
        }
        m++;
    }
}

// Driver Code
int main()
{
    int limit = 30;
    pythagoreanTriplets(limit);
    return 0;
}
