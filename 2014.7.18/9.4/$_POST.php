<html>
<head><title>添加联系人</title></head>
<body>
	<form action ="$_POST.php" method = "post">
		编号：<input type ="text" name="id"><br>
		姓名：<input tyope ="text" name="name"><br>
		<input type ="submit" value="添加联系人">
	</form>
</body>
</html>

<?php
echo "用户添加信息如下：<br>";
foreach( $_POST as $key => $value ){
	echo $key.' : '.$value.'<br>';
}
?>

