/*
Write a program for a matchstick game being played between the computer and a user.
Your program should ensure that the computer always wins. Rules for the game are as follows:

- There are 21 Matchsticks.
- The computer asks the player to pick 1, 2, 3, or 4 matchsticks.
- After the person picks, the computer does its picking.
- Whoever is forced to pick up the last matchstick loses the game.
*/

#include <iostream>
int main()
{
    int count = 21;
    int turn = 22;
    int user = 0;
    int computer = 0;
    std::cout << "Lets play matchstick game.\nThere are 21 number of matchstick to play with.\n";

    while (count >= 1)
    {
        int pick = 0;
        switch (turn % 2)
        {
        case 0:
            std::cout << "\n\nNumber of matchstick available right now is: " << count << "\n";
            std::cout << "\nYour turn\n";
            std::cout << "Pick up 1, 2, 3, or 4 matchsticks: ";
            std::cin >> pick;
            if (pick == 1 || pick == 2 || pick == 3 || pick == 4)
            {
                std::cout << "You picked: " << pick;
                count -= pick;
                user += pick;
                turn--;
                break;
            }
            else
            {
                std::cout << "You picked: " << pick;
                std::cout << "You were supposed to pick from 1 to 4 only!\nComputer wins!";
                exit(0);
            }
            break;

        case 1:
            std::cout << "\n\nNumber of matchstick available right now is\nComputer's Turn" << count << "\nComputer will pick\n";
            pick = 4;
            std::cout << "Computer picked: " << pick << "\n";
            computer += pick;
            count -= pick;
            turn--;
            break;

        default:
            std::cout << "Lorem Ipsum";
            break;
        }
    }

    if (user > computer)
    {
        std::cout << "Computer drawed the last\nYou win, Good game!";
    }
    else
    {
        std::cout << "You were forced to draw the last card\n\nComputer Wins!";
    }
    return 0;
}