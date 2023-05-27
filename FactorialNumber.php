<?php
$inputValue = (int)readline("please Enter the number to convert the factorial :");

function Factorial($number){
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++){
    $factorial = $factorial * $i;
    }
    echo "Factorial = " . $factorial;
    echo "\n";
}

Factorial($inputValue);


?>