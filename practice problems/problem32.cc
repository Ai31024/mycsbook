/*In Digital World, Colours are specifed in RGB format. The value of R, G and B varies from 0 to 255.
In print publications, Colours are mentioned in CMYK format. The value of C, M, Y and K varies from 0.0 to 1.0.
Write a program that converts RGB colours to CYMK colour as per given formula.*/

/*
White   = Max ( Red / 255, Green / 255, Blue / 255 )
Cyan    = ( (White - ( Red / 255 ) ) / White
Magenta = ( (White - ( Green / 255 ) ) / White
Yellow  = ( (White - ( Blue / 255 ) ) / White
Black   = 1 - White
*/

/*Note: If RGB values are all 0, then CMY values are 0 and K value is 1*/

#include <iostream>

int limit_check(int colour)
{
    if (colour >= 0 && colour <= 255)
    {
        colour = colour;
    }
    if (colour < 0)
    {
        colour = 0;
    }
    if (colour > 255)
    {
        colour = 255;
    }
    return colour;
}

float maxfn(float num1, float num2, float num3)
{
    float maxvalue;
    if (num1 > num2 && num1 > num3)
    {
        maxvalue = num1;
    }
    else if (num2 > num3)
    {
        maxvalue = num2;
    }
    else
    {
        maxvalue = num3;
    }
    return maxvalue;
}

int main()
{
    float RED, GREEN, BLUE;
    float R, G, B;
    float CYAN, MAGENTA, YELLOW, BLACK, WHITE;
    float WC, WM, WY;

    std::cout << "Enter Value of Red Colour ( 0 - 255 ): ";
    std::cin >> RED;
    RED = limit_check(RED);
    R = RED / 255;

    std::cout << "Enter Value of Green Colour ( 0 - 255 ): ";
    std::cin >> GREEN;
    GREEN = limit_check(GREEN);
    G = GREEN / 255;

    std::cout << "Enter Value of Blue Colour ( 0 - 255 ): ";
    std::cin >> BLUE;
    BLUE = limit_check(BLUE);
    B = BLUE / 255;

    WHITE = maxfn(R, G, B);
    WC = WHITE - R;
    WM = WHITE - G;
    WY = WHITE - B;
    CYAN = WC / WHITE;
    MAGENTA = WM / WHITE;
    YELLOW = WY / WHITE;
    BLACK = 1 - WHITE;

    std::cout << "RGB to CMYK conversion:\n";
    std::cout << "White:    " << WHITE << "\n";
    std::cout << "Cyan:     " << CYAN << "\n";
    std::cout << "Magenta:  " << MAGENTA << "\n";
    std::cout << "Yellow:   " << YELLOW << "\n";
    std::cout << "Black:    " << BLACK << std::endl;

    return 0;
}