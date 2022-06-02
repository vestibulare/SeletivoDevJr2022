function is_prime(n){
    if(n <= 1){
        return false;
    } else if (n == 2){
        return true;
    }else if (n%2 == 0){
        return false;
    }else{
        for (let i = 2; i < n; i++) {
            if(n%i == 0){
                return false;
            }         
        }
        return true;
    }
}

let count = 0;
let num = 0;
let primes = [];
while(count < 10){
    num++;
    if(is_prime(num)){
        primes.push(num);
        count++;
    }
}
console.log(primes);
