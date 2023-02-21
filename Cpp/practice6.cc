#include<iostream>
class comrade
{
	private:
	int salary_rate, salary, next_event;
	char performance;
	public:
	int employee_id;
	std::string name;
	void setData(int sal_rt, int sal, int nxt_eve, char perf);
	void getData()
	{
		std::cout<<"Employee ID   : "<<employee_id<<std::endl;
		std::cout<<"Employee name : "<<name<<std::endl;
		std::cout<<"Salary Rate   : "<<salary_rate<<std::endl;
		std::cout<<"Salary        : "<<salary<<std::endl;
		std::cout<<"Next Promotion: "<<next_event<<" years later"<<std::endl;
		std::cout<<"Performance   : "<<performance<<std::endl;
	}
};
void comrade::setData(int sal_rt, int sal, int nxt_eve, char perf)
{
	salary_rate = sal_rt;
	salary = sal;
	next_event = nxt_eve;
	performance = perf;
}
int main()
{
	comrade azam;
	azam.employee_id = 12041;
	azam.name = "Mohammad Azam Irshad";
	azam.setData(3, 30000, 1, 'G');
	azam.getData();
	std::cin.get();
	return 0;
}