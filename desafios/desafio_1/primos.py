def is_prime(n):
    if n <= 1:
        return False
    elif n == 2:
        return True
    elif n % 2 == 0:
        return False
    else:
        for i in range(2,n):
            if(n%i==0):
                return False
        return True

if __name__ == '__main__':
    count = 0
    number = 0
    primes = []
    while count < 10:
        number+=1
        if is_prime(number):
            primes.append(number)
            count+=1
    print(primes)
