#include <iostream>

class complex
{
    int x;
    int y;

public:
    void assignData(int a, int b)
    {
        std::cin >> a;
        x = a;
        y = b;
    }
    void addData(complex ob1, complex ob2)
    {
        x = ob1.x + ob2.x;
        y = ob1.y + ob2.x;
    }
    void displayData(void)
    {
        std::cout << "Sum of two complex number is " << x << "+" << y << "i\n";
    }
};

int main()
{

    complex c1, c2, c3;

    c1.assignData(1, 3);
    c1.displayData();

    c2.assignData(4, 7);
    c2.displayData();

    c3.addData(c1, c2);
    c3.displayData();

    return 0;
}