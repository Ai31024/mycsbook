// Object memory allocation using arrays
#include <iostream>

class shop
{
private:                 // Private Domain
    int item_ID[100];    // This limits memory under 100 sub-variables.
    int item_Price[100]; // This limits memory under 100 sub-variables.
    int item_Number;     // Creating for counting purpose.

public:                    // Public Domian
    void initcounter(void) // This function access the private function called "item_Number" and set it to Zero.
    {
        item_Number = 0;
    }

    void setPrice(void) // This function is used to set price value for items according to item_Number
    {
        std::cout << "Enter ID for the item number: " << item_Number + 1 << "\n";
        std::cin >> item_ID[item_Number];
        std::cout << "Enter price for the item"
                  << "\n";
        std::cin >> item_Price[item_Number];
        item_Number++;
    }

    void displayPrice(void) // This function recalls the set values.
    {
        for (int i; i < item_Number; i++)
        {
            std::cout << "The price of Item with ID " << item_ID[i] << " is " << item_Price[i] << "\n";
        }
    }
};

int main()
{
    shop bazaar1;
    bazaar1.initcounter();
    bazaar1.setPrice();
    bazaar1.setPrice();
    bazaar1.setPrice();
    bazaar1.displayPrice();

    std::cin.get();
    return 0;
}