#include <iostream>
using namespace std;

// Function to check if a year is leap or not
bool isLeap(int year)
{
    return (((year % 4) == 0) && (((year % 100) != 0) || ((year % 400) == 0)));
}

// Function to find the first day of the year
int firstDayOfYear(int year)
{
    // Array to store number of days in each month
    int days[12] = {31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31};

    // If leap year then update February's days
    if (isLeap(year))
    {
        days[1] = 29;
    }

    // Initialize variables for formula
    int d = 1;                       // First day of January
    int m = (13 - d + (d > 2)) % 12; // Month code for January
    int y = (year - (d > 2)) % 100;  // Last two digits of year
    int c = (year - (d > 2)) / 100;  // First two digits of year

    // Apply formula and return result
    return ((d + m + y + y / 4 + c / 5 + c / 4 - c * 2) % 7);
}

// Driver code
int main()
{

    // Input year
    int year;
    cout << "Enter a year: ";
    cin >> year;

    // Find and print first day of year
    int firstDay = firstDayOfYear(year);

    switch (firstDay)
    {
    case (0):
        cout << "The first day of " << year << " is Sunday." << endl;
        break;
    case (1):
        cout << "The first day of " << year << " is Monday." << endl;
        break;
    case (2):
        cout << "The first day of " << year << " is Tuesday." << endl;
        break;
    case (3):
        cout << "The first day of " << year << " is Wednesday." << endl;
        break;
    case (4):
        cout << "The first day of " << year << " is Thursday." << endl;
        break;
    case (5):
        cout << "The first day of " << year << " is Friday." << endl;
        break;
    case (6):
        cout << "The first day of " << year << " is Saturday." << endl;
        break;
    }
    
    return 0;
}