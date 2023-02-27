/*If the marks obtained by a student in five different subjects are input through the keyboard
Write a program to find out the aggregate marks and percentage marks obtained by the student.
Assume that the maximum marks that can be obtained by a student in each subject is 100.*/

#include <iostream>
int main()
{
    int s1, s2, s3, s4, s5;
    std::cout << "Enter your marks out of 100 for subject 1 : ";
    std::cin >> s1;
    std::cout << "Enter your marks out of 100 for subject 2 : ";
    std::cin >> s2;
    std::cout << "Enter your marks out of 100 for subject 3 : ";
    std::cin >> s3;
    std::cout << "Enter your marks out of 100 for subject 4 : ";
    std::cin >> s4;
    std::cout << "Enter your marks out of 100 for subject 5 : ";
    std::cin >> s5;
    std::cout << "Your Aggregated marks is : " << (s1 + s2 + s3 + s4 + s5) << " Out of 500\n";
    std::cout << "Your Percentage marks is : " << (s1 + s2 + s3 + s4 + s5) / 5 << " percent\n";
    return 0;
}