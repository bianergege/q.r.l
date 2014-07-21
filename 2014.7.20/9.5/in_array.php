<?php
$os = array("Mac", "NT","Trix","Linux");
if(in_array("Trix",$os)){
	echo "Got Trix";
}

if(in_array("mac",$os)){
	echo "Got mac";
}

$a = array('1.10',12.4,1.13);

if(in_array('12.4',$a,true)){
	echo "'12.4' found with strict check\n";
}

if(in_array(1.13,$a,true)){
	echo "1.13 found with strict check \n";
}

$a = array(array('p','h'), array('p','r'),'o');
if(in_array(array('p','h'),$a)){
	echo "'ph' was found\n";
}

if (in_array(array('h','p'),$a)){
	echo "'hp' was found\n";
}
?>