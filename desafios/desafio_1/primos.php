<?php
    function is_prime($n){
        if($n <= 1){
            return false;
        }elseif ($n == 2){
            return true;
        }elseif ($n%2 == 0){
            return false;
        }else{
            for ($i = 2; $i < $n; $i++) {
                if($n % $i == 0){
                    return false;
                }         
            }
            return true;
        }
    }
    
    $count = 0;
    $num = 0;
    $primes = array();
    while($count < 10){
        $num++;
        if(is_prime($num)){
            array_push($primes, $num);
            $count++;
        }
    }

    foreach ($primes as $val) {
        echo $val . " ";
    }
    
?>