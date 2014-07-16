<?php
function demo($one)
{
	$two=100;
	echo"在函数内部执行：$one+$two=".($one+$two)."<br>";
}
demo(200);
echo"在函数外部执行：$one+$two=".($one+$two);
?>