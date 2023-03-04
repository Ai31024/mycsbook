#include <iostream>
// Use void before function when it should not return a value.
// Use int, float, string, etc. before funtion when it should return a value.
int sum(int a, int b)
{
    return a + b;
}
int sub(int a, int b)
{
    return a - b;
}
int main()
{
    int a, b;
    std::cout << "Enter two values : \n";
    std::cout << "a = ";
    std::cin >> a;
    std::cout << "b = ";
    std::cin >> b;
    std::cout << "sum is: " << sum(a, b) << "\n";
    std::cout << "sub is: " << sub(a, b) << "\n";
    return 0;
}