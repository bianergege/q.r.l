<?php
$lamp = array("Linux","Apache","MySQL","PHP");
usort($lamp,"sortByLen");
print_r($lamp);
function sortByLen ($one,$two){
	if(strlen($one) == strlen($two))
		return 0;
	else
		return(strlen($one)>strlen($two)) ? 1 : -1;
}
?>