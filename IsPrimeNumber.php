<?php

function IsPrimeNumber($input){
    $isPrime = true;
if ($input === 1) {
    echo "1 is neither prime nor composite number.";
}
else if ($input > 1) {
    for ($i = 2; $i < $input; $i++) {
        if ($input % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo "$input is a prime number";
    } else {
        echo "$input is a Composite number ";
    }
}
else {
    echo "The number is Composite number .";
}
    
}

IsPrimeNumber(13);

?>