<?php
$lamp = array("Linux","Apache","MySQL","PHP");
echo count($lamp);
$web=array(
	'lamp' => array('Linux','Apache','MySQL','PHP'),
	'j2ee' => array('Unix','Tomcat','Oracle','JSP')
	);
echo count( $web,1);
echo count($web);
?>
