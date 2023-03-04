// Array of object & passing objects as function argument.
#include <iostream>
class employee
{
	int id;
	int salary;

public:
	void setData(void)
	{
		salary = 10000;
		std::cout << "Enter the ID of Employee : ";
		std::cin >> id;
	}
	void getData(void)
	{
		std::cout << "The Employee ID is : " << id << "\n";
	}
};

int main()
{
	employee abc[10];
	for (int i = 0; i < 10; i++)
	{
		abc[i].setData();
		abc[i].getData();
	}
	return 0;
}