#include <stdio.h>
int main()
{
    int i, num, max, min, N, range;

    printf("Enter how many number you want to enter : ");
    scanf("%d", &N);

    for (i = 1; i < N; i++)
    {
        printf("Enter the number : ");
        scanf("%d", &num);
        if (num > max)
            max = num;
        if (num < min)
            min = num;
    }
    range = max - min;

    printf("\n%d is the range of the data.", range);
    return 0;
}