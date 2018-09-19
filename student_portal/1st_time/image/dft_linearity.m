N=input('how many point dft do you want?'); x1=input('enter the seq');
n2=length(x1); c=zeros(N); x1=[x1 zeros(1,N-n2)];
for k=1:N
for n=1:N
w=exp((-2*pi*i*(k-1)*(n-1))/N);
x(n)=w;
end
c(k,:)=x;
end
disp('dft is ');
r=c*x1';
a1=input('enter the amount of shift in frequency domain');
for n=1:N
w=exp((2*pi*i*(n-1)*(a1))/N);
x2(n)=w;
end
r1=x2.*x1;

subplot(221); stem(abs(r)); grid on; title('orginal dft magnitude plot');

subplot(222); stem(angle(r)); grid on; title('orginal dft angle');

for k=1:N
for n=1:N
w=exp((-2*pi*i*(k-1)*(n-1))/N);
x(n)=w;
end
c(k,:)=x;
end
disp('dft is');
r2=c*r1';

subplot(223); stem(abs(r2)); grid on; title('shifted dft magnitude');

subplot(224); stem(angle(r2)); grid on; title('shifed dft angle');




