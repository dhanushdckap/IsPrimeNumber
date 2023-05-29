<?php

$base = (int)readline("Enter the Base value : ");
$height = (int)readline("Enter the Height value : ");

function FindAreaOfTriangle($base,$height){
    $area = 1/2*($base*$height);
    echo $area." cm²";
}

FindAreaOfTriangle($base,$height);

?>