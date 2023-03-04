// Object oriented programming recap and nesting of member functions
#include <iostream>
using namespace std;

class Animals
{
private:
    int age;
    char sex;
    float weight;

public:
    string name, type;
    void setData(int agein, char sexin, float weightin);
    void getData()
    {
        cout << "The name of animal is: " << name << endl;
        cout << "The animal type is: " << type << endl;
        cout << "The age of animal is: " << age << " years old" << endl;
        cout << "The gender of animal is: " << sex << endl;
        cout << "The weight of animal is: " << weight << " Kilos" << endl;
    }
};

void Animals ::setData(int agein, char sexin, float weightin)
{
    age = agein;
    sex = sexin;
    weight = weightin;
}

int main()
{
    Animals cat;
    cat.name = "Jimmy";
    cat.type = "Cat";
    cat.setData(4, 'M', 5.3);
    cat.getData();

    return 0;
}