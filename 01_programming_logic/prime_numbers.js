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

function getPrimes(num) {
    /*
    Take a positive int number n as a parameter and prints to the console the first n prime numbers
    */

    let primes = [];
    count = 0;

    while (primes.length < num) {
        if (isPrime(count) === true) {
            primes.push(count);
        }
        count++;
    }

    return primes;
}

function printPrimes(primes) {
    /*
    Takes a list of prime numbers and prints one by one to the console
    */

    for (let i = 0; i < primes.length; i++) {
        console.log(primes[i]);
    }
}

number = 10;
primesList = getPrimes(number);
console.log(`\nFirst ${number} prime numbers:\n`);
printPrimes(primesList);