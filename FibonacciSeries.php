<?php

$n = readline("please Enter the number to repeat the Fibonacci Series : ");

if(is_numeric($n)){
    Fibonacci($n);
}else{
    echo "it is string";
}

function Fibonacci($n){
  
    $num1 = 0;
    $num2 = 1;
  
    $counter = 0;
    while ($counter < $n){
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}
  


?>