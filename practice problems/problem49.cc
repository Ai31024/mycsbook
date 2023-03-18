/*Write a program to generate all Pythagorean triplets
with side length less than or equal to 30.*/

#include <iostream>
int main()
{
    int perpendicular = 0, base = 0, hypotenuse = 0;

    for (perpendicular = 0; perpendicular <= 30; perpendicular++)
    {
        int p2 = perpendicular * perpendicular;

        for (base = 0; base <= 30; base++)
        {
            int b2 = base * base;
            int sum = p2 + b2;

            for (hypotenuse = 0; hypotenuse <= 30; hypotenuse++)
            {
                int h2 = hypotenuse * hypotenuse;
                
                if (sum = h2)
                {
                    std::cout << p2 << " + " << b2 << " = " << h2 << "\n";
                }
            }
        }
    }
    return 0;
}
//IDK