/*Two numbers are input through the keyboard into two locations C and D.
Write a program to interchange contents of C and D.*/
#include <iostream>
int main()
{
    int C, D, store;
    std::cout << "Enter value of C: ";
    std::cin >> C;
    std::cout << "Enter value of D: ";
    std::cin >> D;
    store = C;
    C = D;
    D = store;
    std::cout << "~Swapping contents of variables~\nC = " << C << " and D = " << D;
    return 0;
}