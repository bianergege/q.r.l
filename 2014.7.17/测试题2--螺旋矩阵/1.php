<?php
$a=array();
$m=1;
$n=9;
for($i=0;$i<$n/2;$i++)  //j行i列
{
	for($j=$i;$j<$n-$i-1;$j++)
		$a[$j][$i]=$m++;
	for($i=$i;$i<$j;$i++)
		$a[$j][$i]=$m++;
	for($j=$i;$j>$n-1-$i;$j--)
		$a[$j][$i]=$m++;
	for($i=$n-$j-1;$i>$j;$i--)
		$a[$j][$i]=$m++;
}
if($n%2==1)
{
	$a[$n/2][$n/2]=$m++;
}
    for($j=0;$j<$n;$j++)
    {
    	for($i=0;$i<$n;$i++)
    	{
    		if($a[$j][$i]<10)
    			echo '0'.$a[$j][$i]."&nbsp";
    		else
    			echo $a[$j][$i]."&nbsp";
    	}
    	echo '<br>';
    }
?>

