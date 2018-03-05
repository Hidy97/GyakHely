#include <iostream>
using namespace std;

//programozás tétel: rendezés
int T[] = {11,2,34,42,5,16,7};
int i,j,n,x;

int main()
{
n= sizeof T / sizeof (int);
    for (int j=0; j<n; j++)
    {
        for (int i=0; i<n-1; i++)   
        {
        if (T[i] > T[i+1])
            {
            x = T[i];
            T[i] = T[i+1];
            T[i+1]=x;
            }
        }
	}
    for (i = 0; i<n; i++)
    cout<< T[i] <<" ";
}

