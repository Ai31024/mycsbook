#include<iostream>
class vehicals // Creating Class 1 called vehicals
{
    private: // Private Class
        int registration_no, chasis_no;
        std::string license_no;
        // Total elements in private : 3
    public: // Public Class
        std::string company_name, model_name;
        int model_year, total_miles;
        char warranty;
        // Total elements in public : 5
        void setData(int regis_no, int chas_no, std::string lic_no);
        void getData()
        {
            std::cout<<"Vehical Name: "<<company_name<<" , "<<model_name<<std::endl;    //Strings
            std::cout<<"Vehical Year: "<<model_year<<std::endl;                         //Integer
            std::cout<<"Total Distance: "<<total_miles<<" kilometers"<<std::endl;       //Integer
            std::cout<<"Vehical Warranty: "<<warranty<<std::endl;                       //Character
            std::cout<<"Vehical Registration No.: "<<registration_no<<std::endl;        //Integer
            std::cout<<"Vehical Chasis No.: "<<chasis_no<<std::endl;                    //Integer
            std::cout<<"Vehical License plate No.: "<<license_no<<std::endl;            //String
        }
};
void vehicals::setData(int regis_no, int chas_no, std::string lic_no) // Defining function inside public
{
    registration_no = regis_no;
    chasis_no = chas_no;
    license_no = lic_no;
}
int main()
{
    std::cout<<"\n";
    vehicals cars; // Object 1 named cars
    cars.company_name = "Ford";
    cars.model_name = "Mustang GT";
    cars.model_year = 2006;
    cars.total_miles = 5000;
    cars.warranty = 'Y';
    cars.setData(102401, 630924, "1598QA");
    cars.getData();

    std::cout<<"\n";
    vehicals bikes; // Object 2 named bikes
    bikes.company_name = "Yamaha";
    bikes.model_name = "R1";
    bikes.model_year = 2008;
    bikes.total_miles = 3000;
    bikes.warranty = 'Y';
    bikes.setData(102402, 630925, "1599QA");
    bikes.getData();
    
    std::cout<<"\n";
    vehicals buses; // Object 3 named busus
    buses.company_name = "Ashok-Leyland";
    buses.model_name = "StarBus";
    buses.model_year = 2004;
    buses.total_miles = 8000;
    buses.warranty = 'N';
    buses.setData(103210, 620930, "1470QA");
    buses.getData();
    
    std::cout<<"\n";
    vehicals trucks; // Object 4 named trucks
    trucks.company_name = "TATA";
    trucks.model_name = "Astro Pathfinder";
    trucks.model_year = 2005;
    trucks.total_miles = 10000;
    trucks.warranty = 'N';
    trucks.setData(102303, 620944, "1498QA");
    trucks.getData();

    std::cin.get();
    return 0;
}