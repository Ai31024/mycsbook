// Structure, Union and enums.
#include<iostream>
using namespace std;

// writing a structure:

// struct employee                                         // creating struct named employee
//     {
//         int eID;                                        // element 1
//         char initials;                                  // element 2
//         float salary;                                   // element 3
//     };

// writing a union:

// union food                                              // creating union named food
//     {
//         int biryani;                                    // element 1
//         char shawarma;                                  // element 2
//         float kabab;                                    // element 3
//     };


int main()
{
    // Calling struct 

    // struct employee azam;                               // adding variable named azam to struct.

    // azam.eID = 12041;                                   // assigning value to eID for given name
    // azam.initials = 'A';                                // assigning value to initials for given name
    // azam.salary = 18000;                                // assigning value to salary for given name

    // calling values from struct

    // cout<<azam.eID<<endl;                               // console out azam.eID
    // cout<<azam.initials<<endl;                          // console out azam.initials
    // cout<<azam.salary<<endl;                            // console out azam.salary

    // calling union

    // union food today;                                   // adding a variable named today to union
    // today.biryani = 100;                                // element 1

    // cout<<"output : "<<today.biryani<<endl;             // console out today.biryani

    //examples of errors in union:

    // today.shawarma = 'G';                               // assigning to other element overwrites the previous one. Giving nonsense values.
    // today.kabab = 99.5;                                 // especially when it overwrite value for different datatype element.
    // cout<<"output : "<<today.kabab<<endl;               // calling different element when it's value is not assign gives nonsense values.
    
    return 0;
}