<?php
$out=01;
while($out<7)
{
	echo '<br>'.$out.'</br>';
	$out++;
}
echo '<br>';
$in=0;
while($in<$out)
{
	echo ($out+$in)."&nbsp&nbsp&nbsp";
	$in++;
}
?>
