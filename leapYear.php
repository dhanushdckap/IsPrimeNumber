<?php

$enterYear = (int)readline("Enter the Year : ");

function findLeapYear($enterYear){
    $leapYear = $enterYear / 4;

    if(is_float($leapYear)){
        echo "it is not a leap year";
    }else{
        echo "it is a leap year" ."\n";
    }
}

findLeapYear($enterYear);






?>