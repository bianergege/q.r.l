<?php
$one=200;
$two=100;

function demo()
{
    global $one,$two;
	echo "运算结果：".($one+$two)."<br>";
}
demo();
?>
