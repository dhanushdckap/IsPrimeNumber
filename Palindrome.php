<?php

$input = (string)readline("Enter the name : ");

function Palindrome($input){ 
    $reverseWord = strrev($input);
    if($reverseWord === $input){
        echo "it is palindrome word.";
        echo "\n";
    }else{
        echo "it is not a palindrome word.";
        echo "\n";       
    }
}

Palindrome($input);

?>