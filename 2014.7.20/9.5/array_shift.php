<?php
$lamp = array("a"=>"Linux","b"=>"Apache","c"=>"MySQL","d"=>"PHP");
echo array_shift($lamp);
print_r($lamp);
$lamp = array("Linux","Apache","MySQL","PHP");
echo array_shift($lamp);
print_r($lamp);
?>