#include <iostream>
using namespace std;

class devices
{
private:
    int model_no;
    char warranty;

public:
    int serial_no, memory;
    char usable;
    string name;
    void putData(int model, char warrentt);
    void getData()
    {
        cout << "Serial No.: " << serial_no << endl;
        cout << "Device name: " << name << endl;
        cout << "Device Memory: " << memory << " GB" << endl;
        cout << "Usable: " << usable << endl;
        cout << "Device model No.: " << model_no << endl;
        cout << "Warranty: " << warranty << endl;
    }
};

void devices ::putData(int model, char warrentt)
{
    model_no = model;
    warranty = warrentt;
}

int main()
{
    devices smartphone;
    smartphone.serial_no = 01;
    smartphone.name = "Sony Xperia X1";
    smartphone.memory = 128;
    smartphone.usable = 'Y';
    smartphone.putData(3116, 'Y');
    smartphone.getData();

    return 0;
}