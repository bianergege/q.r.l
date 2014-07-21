<?php
$lamp = array("a"=>"Linux","b"=>"Apache","c"=>"MySQL","d"=>"PHP");
echo array_rand($lamp,1);
echo $lamp[array_rand($lamp)]."<br>";

$key = array_rand($lamp,2);
echo $lamp[$key[0]]."<br>";
echo $lamp[$key[1]]."<br>";
?>