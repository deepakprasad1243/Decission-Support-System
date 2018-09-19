x=input('enter sequence x;');
N=length(x);
X=zeros(1,N);
x1=zeros(1,N);
for k=1:N
for n=1:N
X(k)=X(k)+(x(n)*exp(-1j*2*pi*(n-1)*(k-1)/N));
X1(k)=X1(k)+(x(n)*exp(-1j*2*pi*(n+N-1)*(k-1)/N));
end;
end;
disp('F[x(n)]');
for k=1;N
disp(X(k));
end;
disp('F[x(n+N)]')
for k=1:N
disp(X1(k));
end;