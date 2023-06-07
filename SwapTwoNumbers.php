<?php

$firstNumber = (int)readline("Enter the first Number ");
$secondNumber = (int)readline("Enter the second Number ");
echo "\n";

function swapTwoNumbers($firstNumber,$secondNumber){

    $firstNumber = $firstNumber+$secondNumber;
    $secondNumber = $firstNumber-$secondNumber;
    $firstNumber = $firstNumber - $secondNumber;
    echo "The swaped firstNumber=> ". $firstNumber."\n";
    echo "The swaped secondNumber=> ". $secondNumber."\n";

}

swapTwoNumbers($firstNumber,$secondNumber)



?>