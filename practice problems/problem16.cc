/*If cost price and selling price of an item are input through the keyboard,
write a program to determine whether the seller has made profit or incurred loss.
Also determine how much profit he made or loss he incurred.*/
#include <iostream>
int result(int cost, int sell)
{
    return sell - cost;
}

int main()
{
    int cost_price, sell_price;
    std::cout << "Enter Cost price of an item: ";
    std::cin >> cost_price;
    std::cout << "Enter Selling price of an item: ";
    std::cin >> sell_price;
    if (sell_price > cost_price)
    {
        std::cout << "Profit earned!\nProfit: +" << result(cost_price, sell_price) << "\n";
    }
    else
    {
        std::cout << "Loss Incurred...\nLoss: " << result(cost_price, sell_price) << "\n";
    }
    return 0;
}