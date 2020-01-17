#include<stdio.h>
#include<Windows.h>
#include<stdlib.h>
int a,b,c;

int alr(int h,int m)
{
    if(b==h&&c==m&&a==2)
    {
        printf("\a");
    }
}

int main()
{

    SYSTEMTIME str_t;
	GetSystemTime(&str_t);

    int hh=str_t.wHour+6,mm=str_t.wMinute,ss=str_t.wSecond;
    char str[] = "just give hour and minute for alarm";
    printf("If you want to see the clock then press 1,\n Or if you want to set an alarm then press 2(%s)",str);
    scanf("%d",&a);
    if(a==2)
    {
       printf("Input alarm time\n");
       scanf("%d %d",&b,&c);
    }
    for(;;)
    {
        ss++;
        if(ss==59)
            {
            mm++;
            ss=0;
            if(mm==59)
            {
                hh++;
                mm=0;
                while(hh==23)
                {
                    hh=0;
                }
            }
        }
        Sleep(1000);
        system("cls");
        printf("%2d : %2d : %2d \n",hh,mm,ss);
        alr(hh,mm);

    }

    return 0;
}
