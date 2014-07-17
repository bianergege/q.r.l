<?php
$n = 10000; 
$m = 100; 
$number = range(1, $n); 
shuffle($number); 
$result = array_slice($number, 0, $m); 
sort($result); 
echo '<pre>'; 
print_r($result); 
echo '<pre/>';
?>