x1=input('enter the firts input sequence x1;');
x2=input('enter scnd input sequence x2;' );
N=length(x1); X1=zeros(1,N); X2=zeros(1,N); X3=zeros(1,N);
Y1=zeros(1,N); x3=cconv(x1,x2,N);

disp('circular convolution:');
for n=1:N
disp(x3(n));
end;
for k=1:N
for n=1:N
X1(k)=X1(k)+(x1(n)*exp(-1j*2*pi*(n-1)*(k-1)/N));
X2(k)=X2(k)+(x2(n)*exp(-1j*2*pi*(n-1)*(k-1)/N));
Y1(k)=Y1(k)+(x3(n)*exp(-1j*2*pi*(n-1)*(k-1)/N));
X3(k)=X1(k)*X2(k);
end;
end;
disp('DFT[multiplication property};');
for k=1:N
disp(Y1(k));
end;
disp('[X1(k)*X2(k)]:');
for k=1:N
disp(X3(k));
end;