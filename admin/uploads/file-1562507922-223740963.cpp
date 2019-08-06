#include<iostream>
#include<math.h>
#include<cstdlib>
#define R 50

using namespace std;
int x[R],count;
int place(int k,int i)
{
	int j;
	for(j=1;j<k;j++)
	{
		if(x[j]==i||abs(x[j]-i)==abs(j-k))
			return 0;
	}
	return 1;
}
void NQueens(int k,int n)
{
	int i,j;
	for(i=1;i<=n;i++)
	{
		if(place(k,i)==1)
		{
			x[k]=i;
			if(k==n)
			{
				count++;
				cout<<"Solution"<<count<<".\n";
				cout<<"Row:Column=";
				for(j=1;j<=n;j++)
					cout<<j<<":"<<x[j]<<"";
				cout<<endl;
			}
			else NQueens(k+1,n);
		}
	}
}
int main()
{
	int n;
	cout<<"*** 8-Queens Chess Problem***\n";
	do
	{cout<<"\nEnter number of Queens(0 to quit):";
	cin>>n;
	count=0;
	NQueens(1,n);
	}while(n);
}

/*

*** 8-Queens Chess Problem***

Enter number of Queens(0 to quit):4
Solution1.
Row:Column=1:22:43:14:3
Solution2.
Row:Column=1:32:13:44:2

Enter number of Queens(0 to quit):0

Process returned 0 (0x0)   execution time : 18.100 s
Press any key to continue.
*/
