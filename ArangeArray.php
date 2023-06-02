<?php


$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);
// want to output
$keysAndValues = array(
    "first"=>"dinosaur",
    "second"=>"pig",
    "third"=>"platypus"
);


$keysAndValues = [];
$keysAndValues = array_combine( array_values( $keys ), array_values( $values ) );

print_r($keysAndValues);


?>