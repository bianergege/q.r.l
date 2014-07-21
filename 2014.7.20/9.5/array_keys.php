<?php
$lamp = array("a" => "Linux","b" => "Apache","c" => "MySQL","d" => "PHP");
print_r( array_keys($lamp));
print_r( array_keys($lamp,"Apache"));

$a = array(10,20,30,"10");
print_r( array_keys($a,"10",false));

$a = array(10,20,30,"10");
print_r( array_keys($a,"10",true));
?>