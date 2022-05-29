<!-- 
    1. [Lógica de Programação] Escreva um trecho de código em três linguagens que imprima os dez primeiros números primos.
    Use em seus exemplos obrigatoriamente php7.1, Python 3 e Javascript ES6.
 -->

<?php

function isPrime($num): bool
{
    /*
    Takes an number as parameter and returns true if the number is a prime.
    Else it returns false.
    */

    // Since neither 1 nor 0 is a prime number, return false
    if ($num == 0 or $num == 1) {
        return false;
    }

    // Loops from 2 to n - 1
    for ($i = 2; $i < $num; $i++) {

        // If the number is divisible by i, then n is not a prime number
        if ($num % $i == 0) {
            return false;
        }
    }

    // Otherwise, n is a prime number
    return true;
}

function getPrimes($num)
{
    /*
    Take a positive int number n as a parameter and prints to the console the first n prime numbers
    */

    $primes = array();
    $count = 0;

    while (count($primes) < $num) {
        if (isPrime($count)) {
            array_push($primes, $count);
        }
        $count++;
    }

    return $primes;
}

function printPrimes($primes)
{
    /*
    Takes a list of prime numbers and prints one by one to the console
    */

    for ($i = 0; $i < count($primes); $i++) {
        echo $primes[$i] . " ";
    }
}

$number = 10;
$primesArray = getPrimes($number);
echo "First $number prime numbers:<br><br>";
printPrimes($primesArray);
?>