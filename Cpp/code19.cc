// Static Data members & methods
#include <iostream>
class members
{
private:
    int id;
    static int count; //Any static variable will start from Zero (0)

public:
    void putdata(void)
    {
        std::cout << "\nEnter the Member ID: ";
        std::cin >> id;
        count++;
    }
    void getdata(void)
    {
        std::cout << "The Member ID is: " << id << " and is on line: " << count << "\n";
    }
    static void getcount(void)
    {
        std::cout << "The value of count is: " << count;
    }
};

int members::count; //Any value can be assigned in here Only. If no value assigned then the default value will be Zero.

int main()
{
    members azam, ahmad, zainab, mariyam;
    
    azam.putdata();
    azam.getdata();
    azam.getcount();

    ahmad.putdata();
    ahmad.getdata();
    ahmad.getcount();

    zainab.putdata();
    zainab.getdata();
    zainab.getcount();

    mariyam.putdata();
    mariyam.getdata();
    mariyam.getcount();

}