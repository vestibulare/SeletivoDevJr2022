/*
1. [Lógica de Programação] Escreva um trecho de código em três linguagens que imprima os dez primeiros números primos.
Use em seus exemplos obrigatoriamente php7.1, Python 3 e Javascript ES6.
*/

function isPrime(num) {
    /*
    Takes a number as parameter and returns true if the number is a prime.
    Else it returns false.
    */

    // Since neither 1 nor 0 is a prime number, return false
    if (num == 1 || num == 0) {
        return false
    }

    // Loops from 2 to n - 1
    for (let i = 2; i < num; i++) {
        
        // If the number is divisible by i, then n is not a prime number
        if (num % i == 0) {
            return false
        }
    }

    // Otherwise, n is a prime number
    return true
}

function printPrimes(num) {
    /*
    Take an int number as parameter and prints to the console all the prime numbers ranging from 0 to the number passed as parameter
    */

    for (let i = 0; i <= num; i++) {
        if (isPrime(i)) {
            console.log(i)
        }
    }
}

printPrimes(10)