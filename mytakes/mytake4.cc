#include <iostream>

void myFunction(std::string fname)
    {
        std::cout << fname << " Irshad.\n";
    }

int main()
{
    myFunction("Azam");
    myFunction("Zainab");
    myFunction("Ahmad");
    myFunction("Mariyam");

    return 0;
}