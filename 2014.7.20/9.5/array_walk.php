<?php
function myfun1($value,$key){
	echo"The key $key has the value $value<br>";
}

$lamp = array("a"=>"Linux","b"=>"Apache","c"=>"Mysql","d"=>"PHP");
array_walk($lamp,"myfun1");

function myfun2($value,$key,$p){
	echo "$key $p $value <br>";
}

array_walk($lamp,"myfun2","has the value");

function myfun3(&$value,$key){
	$value = "Web";
}

array_walk($lamp,"myfun3");
print_r($lamp);
?>
