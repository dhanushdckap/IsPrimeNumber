<?php  
$inputValue = (int)readline("please Enter the number to multiply :");
TableOfNumber($inputValue);

function TableOfNumber($number){
    for($i=0;$i<=10;$i++){
        $product = $i*$number;
        echo "$number * $i = $product" ;  
        echo"\n"; 
    }
}

?>  