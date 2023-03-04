// Array of object & passing objects as function argument.
#include <iostream>
class complex
{
    int a;
    int b;

public:
    void setData(int x, int y)
    {
        a = x;
        b = y;
    }
    void setDatabySum(complex o1, complex o2)
    {
        a = o1.a + o2.a;
        b = o1.b + o2.b;
    }
    void printvalues(void)
    {
        std::cout << "Your complex number is " << a << "+" << b << "i"
                  << "\n";
    }
};

int main()
{
    complex c1, c2, c3;

    c1.setData(1, 4);
    c1.printvalues();

    c2.setData(3, 7);
    c2.printvalues();

    c3.setDatabySum(c1, c2);
    c3.printvalues();

    return 0;
}