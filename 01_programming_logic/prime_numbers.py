"""
1. [Lógica de Programação] Escreva um trecho de código em três linguagens que imprima os dez primeiros números primos.
Use em seus exemplos obrigatoriamente php7.1, Python 3 e Javascript ES6.
"""


def isPrime(n: int) -> bool:
    """
    Takes a number as parameter and returns true if the number is a prime.
    Else it returns false.
    """

    # Since neither 1 nor 0 is a prime number, return false
    if n == 1 or n == 0:
        return False

    # Loops from 2 to n - 1
    for i in range(2, n):

        # If the number is divisible by i, then n is not a prime number
        if n % i == 0:
            return False

    # Otherwise, n is a prime number
    return True


def getPrimes(n: int) -> list[int]:
    """
    Take a positive int number n as a parameter and prints to the console the first n prime numbers
    """

    primes = []
    count = 0

    while len(primes) < n:
        if isPrime(count):
            primes.append(count)
        count += 1

    return primes


def printPrimes(primes: list[int]) -> None:
    """
    Takes a list of prime numbers and prints one by one to the console
    """
    for i in primes:
        print(i, end=" ")


if __name__ == "__main__":
    number = 10
    primeList = getPrimes(number)
    print(f"First {number} prime numbers:\n")
    printPrimes(primeList)
