/*This is Dragon Quest! - A game by Azam Irshad Under development*/
#include <iostream>

void title();

void story_play(int humanity, int position);

int action_choice(int humanity, int position);

void map_display(int position);

void selection_choice(int humanity, int position);

int main()
{
    int humanity = 0;
    int position = 0;
    title();
    map_display(position);

    return 0;
}

void story_play(int humanity, int position)
{
    if (humanity == 0)
    {
        switch (position)
        {
        case 0:
            std::cout << "You enter into an eating-house... You are looking something to eat before you leave for your journey.\n";
            std::cin.get();
            std::cout << "As you were having your meal, you noticed a mysterious woman is looking at you...\n";
            std::cin.get();
            std::cout << "After you finished your meal she came to talk to you... maybe she was waiting for you to finish your meal.\n";
            std::cin.get();
            std::cout << "\t\t**Introduction**\n";
            std::cin.get();
            std::cout << "Mysterious Woman: 'Welcome Stranger!'\n";
            std::cin.get();
            std::cout << "Mysterious Woman: 'I've heard many tales about you!'\n";
            std::cin.get();
            std::cout << "You: '...'\n";
            std::cin.get();
            std::cout << "Mysterious Woman: 'Oh so it's true... you really are the *Quite* type'\n";
            std::cin.get();
            std::cout << "Mysterious Woman: 'Alright then lets cut to the chase... You are looking to slay the 'Scarlet Dragon'?\n";
            std::cin.get();
            std::cout << "You: '!!!'\n";
            std::cin.get();
            std::cout << "Mysterious Woman: 'I figured...'\n";
            std::cin.get();
            std::cout << "You: '...?'\n";
            std::cin.get();
            std::cout << "Mysterious Woman: 'Well... You are not the only legendary hero who came to defeat this magnificent beast.'\n";
            std::cin.get();
            std::cout << "Mysterious Woman: 'Many came but none could claim their victory.\n";
            std::cin.get();
            std::cout << "Mysterious Woman: Now I'am curious how will you handle your Dragon Quest...\n";
            std::cin.get();
            std::cout << "Mysterious Woman: 'I can be your fellow traveller in your journey.'\n";
            std::cin.get();
            std::cout << "You walked away signalling that you need no help and want no one to be hurt.\n";
            std::cin.get();
            std::cout << "But she followed you anyways.\n";
            std::cin.get();
            std::cout << "You were annoyed and signalled her to leave but she dissappeared and you heared a playful giggle.\n";
            std::cin.get();
            std::cout << "You check your bag and saw a map which was not there. It shows where you are and few places marked as objective.\n";
            std::cin.get();
            std::cout << "On the bottom left side of the map there is a woman's Lip mark.\n";
            std::cin.get();
            std::cout << "You: ' :| '\n";
            std::cin.get();
            std::cout << "She left a part of her spirit as a map with you...\n";
            std::cin.get();
            std::cout << "\n\nYou heard a faint sound, a cry for help that is coming from the forest.\n";
            std::cin.get();
            break;
        case 1:
            std::cout << "You enter into the forest... as you followed the voice.\n";
            std::cin.get();
            std::cout << "You saw there was a white flame that encircled a house and from the broken window the cry for help came.\n";
            std::cin.get();
            std::cout << "You picked up your courage to go inside and save them.\n";
            std::cin.get();
            std::cout << "You jumped over the flame and went inside burning house.\n";
            std::cin.get();
        }
    }
}

void map_display(int position)
{
    switch (position)
    {
    case 0:
        std::cout << "\t\t**Map**\nM - Hidden mountain\nF - Forst\nL - Mysterious Lake\nE - Eating house\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   M   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   L   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   E   .   .   F   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   y   o   u   '   r   e   .   |\n";
        std::cout << "|   .   .   .   .   .   .   Y   <   h   e   r   e   .   .   |\n";
        break;
    case 1:
        std::cout << "\t\t**Map**\nM - Hidden mountain\nF - someone needs help\nL - Mysterious Lake\nYou are at Eating house\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   M   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   L   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   y   o   u   '   r   e   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   h   e   r   e   >   Y   .   .   H   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        break;
    case 2:
        std::cout << "\t\t**Map**\nM - Hidden mountain\nL - Mysterious Lake\nE - Eating house\nYou are looking to help someone\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   M   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   L   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   y   o   u   '   r   e   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   h   e   r   e   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   v   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   E   .   .   Y   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        break;
    case 3:
        std::cout << "\t\t**Map**\nM - Hidden mountain\nH - someone needs help\nE - Eating house\nYou are at Mysterious Lake\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   M   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   Y   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   ^   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   y   o   u   '   r   e   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   h   e   r   e   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   E   .   .   H   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        break;
    case 4:
        std::cout << "\t\t**Map**\nM - Hidden mountain\nH - someone needs help\nL - Mysterious Lake\nE - Eating house";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   Y   <   y   o   u   '   r   e   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   h   e   r   e   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   L   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   E   .   .   H   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        std::cout << "|   .   .   .   .   .   .   .   .   .   .   .   .   .   .   |\n";
        break;
    default:
        if (position > 4)
        {
            position = 4;
            break;
        }
        if (position < 0)
        {
            position = 0;
            break;
        }
    }
}

void title(void)
{
    std::cout << "\t\t**Game Info**\nChoose between 0 - 9 When selection choice comes.\nChoose wasd for direction when action choice comes.\n";
    std::cout << "Press Enter to play\n\n";
    std::cin.get();
}

int action_choice(int humanity, int position)
{
    char action;
    std::cout << "Select your path";
    std::cin >> action;
    if (position == 0)
    {
        switch (action)
        {
        case 'w':
            std::cout << "You went ahead in search of hidden mountains";
            switch (humanity)
            {
            case 1:
                std::cout << "You have discovered the hidden mountains but came Unprepared.\nThe Dragon got hold of you!\n\t\t**Game Over**";
                break;
            case 2:
                std::cout << "You have discovered the hidden mountains but came somewhat prepared.\n You dodged the dragon's wrath!\nBut the Dragon has trapped you!\n\t\t**Game Over**";
                exit(0);
                break;
            case 3:
                std::cout << "You have discovered the hidden mountains but arrived half-prepared.\nYour battle with the dragon was legendary.\nBut you are wounded and so is the scarlet.\nYou both succumb to your wounds!\n\t\t**Game Over**";
                exit(0);
                break;
            case 4:
                std::cout << "You have discovered the hidden mountains and you have arrived fully-prepared.\nYou dodged Scarlet's wrath!\nYou showed her the Magical Ring\nShe suddenly turned back to human.\nShe is the Mysterious Woman!";
                exit(0);
                break;
            default:
                if (humanity == 0)
                {
                    std::cout << "You have not discovered the hidden mountains. You are wandering Aimlessly\n";
                    break;
                }
            }
        case 'd':
            std::cout << "You went to help someone in forest.\n";
        }
    }
    return humanity, position;
}

void selection_choice(int humanity, int position)
{
    int selection;
    std::cout << "Choose from the following options:\n1. Walk\t2.See Map";
    std::cin >> selection;
    switch (selection)
    {
    case 1:
    //
    break;
    }
}