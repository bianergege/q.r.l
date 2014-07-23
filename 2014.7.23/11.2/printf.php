<?php
$str = "LAMP";
$number = 789;
printf("%s book. page number %u <br>",$str,$number);
//将整型$number按浮点输出，并在小数点后保留3位
printf("%0.3f <br>",$number);

//定义一个格式并在其中使用占位符
$format = "The %2\$s book contains %1\$d pages.That's a nice %2\$s full of %1\$d pages.<br>";

//按格式的占位符号输出多次变量，%2$s位置处是第三个参数
printf($format,$number,$str);
?>