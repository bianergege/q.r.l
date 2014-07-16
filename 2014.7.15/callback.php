<?php
function callback($fun)
{
	for($i=0;$i<=100;$i++)
	{
		if($fun($i))
			continue;
		echo $i.'<br>';
	}
}

function one($num)
{
	return $num%3==0;
}

function two($num)
{
	return $num==strrev($num);
}

callback("one");
echo '-----------------------<br>';
callback('two');
?>