<?php
$a = array(1=>'one',2=>'two',3=>'three');
unset($a[2]);
echo "$a";
$b = array_values($a);
?>