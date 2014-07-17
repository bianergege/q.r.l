<form action = "jiangjin.php" method="post" action="">
    请输入利润：<input type="text" name="lirun" >
    <input type="submit"  value="send"/>
</form>
<?php
foreach($_POST as $key => $val) {
$key=trim($val);  //接收提交的数据
$s1 = 100000*0.1;
$s2 = $s1+ 100000*0.075;
$s3 = $s2 + 200000*0.05;
$s4 = $s3 + 200000*0.03;
$s5 = $s4 + 400000*0.015;
if($key<=100000)
	$value = $key*0.1;
else if($key>100000 && $key<=200000)
	$value = $s1 + ($key-100000)*0.075;
else if($key>200000 && $key<=400000)
	$value = $s2 + ($key-200000)*0.05;
else if($key>400000 && $key<=600000)
	$value = $s3 + ($key-400000)*0.03;
else if($key>600000 && $key<=1000000)
	$value = $s4 + ($key-600000)*0.015;
else if($key>1000000)
	$value = $s4 + ($key-1000000)*0.01;
echo "奖金为：".$value;
}
?>
