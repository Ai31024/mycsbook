#include <iostream>
#include <string>

class binary
{
private:
    std::string lines;
    void binary_check(void);

public:
    void read(void);
    void ones_compliment(void);
    void display1(void);
    void display2(void);
};

void binary::read(void)
{
    std::cout << "Enter a binary number" << std::endl;
    std::cin >> lines;
    std::cout << std::endl;
}

void binary::binary_check(void)
{
    for (int i = 0; i < lines.length(); i++)
    {
        if (lines.at(i) != '0' && lines.at(i) != '1')
        {
            std::cout << "\nIncorrect binary format" << std::endl;
            exit(0);
        }
    }
}

void binary::ones_compliment(void)
{
    binary_check();
    std::cout << "\nApplying 1's Compliment" << std::endl;
    for (int i = 0; i < lines.length(); i++)
    {
        if (lines.at(i) == '0')
        {
            lines.at(i) = '1';
        }

        else
        {
            lines.at(i) = '0';
        }
    }
}

void binary::display1(void)
{
    std::cout << "Your entered data is: " << std::endl;
    for (int i = 0; i < lines.length(); i++)
    {
        std::cout << lines.at(i);
    }
    std::cout << std::endl;
}

void binary::display2(void)
{
    std::cout << "Your entered data is now: " << std::endl;
    for (int i = 0; i < lines.length(); i++)
    {
        std::cout << lines.at(i);
    }
    std::cout << std::endl;
}

int main()
{
    binary number;
    number.read();
    number.display1();
    number.ones_compliment();
    number.display2();

    std::cin.get();
    return 0;
}