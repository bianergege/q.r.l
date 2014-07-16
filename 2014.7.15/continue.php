<?php
$sum=0;
for($i=1;$i<=100;$i++)
{
	if($i%10==3)
		continue;
	$sum+=$i;
}
echo "结果为：$sum";
?>