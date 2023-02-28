#include<iostream>
void func_default(std::string land = "India")
//Land is optional parameter and "India" is it's default value.
{
    std::cout<<"The country is : "<<land<<"\n";
}
int main()
{
    func_default();
    func_default("Qatar");
    func_default("KSA");
    func_default("UAE");

    return 0;
}