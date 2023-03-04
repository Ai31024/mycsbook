/*If a character is entered through the keyboard,
write a program to determine wheter the character is a capital letter,
a small case letter, a digit or a special symbol.*/

/*ASCII Table:
A-Z -> 65-90
a-z -> 97-122
0-9 -> 48-57
special symbols -> 0-47, 58-64, 91-96, 123-127*/

#include<iostream>
int main()
{
    char character;
    std::cout<<"Enter a character: ";
    std::cin>>character;
    if(character>=65 && character<=90)
    {
        std::cout<<"Entered character '"<<character<<"' is a Capital letter."<<std::endl;
    }
    else if( character>=97 && character<=122)
    {
        std::cout<<"Entered character '"<<character<<"' is a Small letter."<<std::endl;
    }
    else if( character>=48 && character<=57)
    {
        std::cout<<"Entered character '"<<character<<"' is a Number."<<std::endl;
    }
    else
    {
        std::cout<<"Entered character '"<<character<<"' is a special symbol."<<std::endl;
    }

    return 0;
}