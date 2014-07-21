<?php
$lamp = array("Web");
echo array_push($lamp,"Linux");
print_r($lamp);
echo array_push($lamp,"Apache","MySQL","PHP");
print_r($lamp);
$lamp["web"] = "www";
print_r($lamp);
?>