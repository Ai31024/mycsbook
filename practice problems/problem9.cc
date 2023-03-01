//Length of sides of a triangle is input through keyboard. Find the area o the triangle.
//Using Heron's Formula.
#include <iostream>
#include <cmath>
using namespace std;

int main()
{
  float a, b, c; // lengths of sides
  float s, area; // semi-perimeter and area

  cout << "Enter size of each side of triangle" << endl;
  cout << "Enter size for First Side = ";
  cin >> a;
  cout << "Enter size for Second Side = ";
  cin >> b;
  cout << "Enter size for Third Side = ";
  cin >> c;

  s = (a + b + c) / 2;
  area = sqrt(s * (s - a) * (s - b) * (s - c));

  cout << "The area of the triangle is: " << area << endl;

  return 0;
}