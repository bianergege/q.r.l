<?php
$lamp = array("Linux","Apache","MySQL","PHP");
print_r(array_slice($lamp,1,2));
print_r(array_slice($lamp,-2,1));
print_r(array_slice($lamp,1,2,true));
$lamp = array("a"=>"Linux","b"=>"Apache","c"=>"MySQL","d"=>"PHP");
print_r(array_slice($lamp,1,2));
?>