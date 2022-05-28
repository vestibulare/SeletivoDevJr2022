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


def printPrimes(n: int) -> None:
    """
    Take an int number as parameter and prints to the console all the prime numbers ranging from 0 to the number passed as parameter
    """
    for i in range(n):
        if isPrime(i):
            print(i, end=" ")


if __name__ == "__main__":
    printPrimes(10)
