<?php
$input = array("Linux","Apache","MySQL","PHP");
array_splice($input,2);
print_r($input);
$input = array("Linux","Apache","MySQL","PHP");
array_splice($input,1,-1);
print_r($input);
$input = array("Linux","Apache","MySQL","PHP");
array_splice($input,1,-1,array("web","www"));
print_r($input);
?>