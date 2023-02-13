// Structure, Union and Enums: (cont.)
// here we are using typedef for Structure.

#include<iostream>
using namespace std;

typedef struct workforce                                   // typedef gives simple names
{
    int idn;                                               // element 1
    string name;                                           // element 2
    float salary;                                          // element 3
    char shift;                                            // element 4

}wf1;                                                      // wf1 is choosen as simple name


int main()
{
    wf1 comrade1;                                          // Here wf1 replaces 'struct workforce'
    comrade1.idn = 12041;
    comrade1.name = "Azam";
    comrade1.salary = 18000;
    comrade1.shift = 'G';

    cout<<"ID number:           "<<comrade1.idn<<endl;
    cout<<"Name of Comrade:     "<<comrade1.name<<endl;
    cout<<"Payroll per month:   "<<comrade1.salary<<endl;
    cout<<"Duty shift:          "<<comrade1.shift<<endl;
    
    return 0;
}