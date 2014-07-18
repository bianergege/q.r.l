<?php
$GLOBALS['var1'] = 5;
$var2 = 1;
function get_value(){
	global $var2;
	$var1 = 0;
	return $var2++;
}
get_value();
echo $var1;
echo $var2;
?>