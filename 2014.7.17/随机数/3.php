<?php 
$numbers = range (1,10000); 
shuffle ($numbers); 
$no=100; 
$result = array_slice($numbers,0,$no); 
for ($i=0;$i<$no;$i++)
{ 
	for($j=$i+1;$j<$no;$j++)
	{
		if($result[$i]>$result[$j])
		{
			$temp=$result[$i];
			$result[$i]=$result[$j];
			$result[$j]=$temp;
		}
	} 
}
for($i=0;$i<$no;$i++)
{
	echo $result[$i].'<br>'; 
}

?> 