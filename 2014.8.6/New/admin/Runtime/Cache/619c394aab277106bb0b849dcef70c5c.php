<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Index</title>
</head>
<body>
	<form action="/App/admin.php/User/update" method='post'>
		<input type="hidden" name='id' value="<?php echo ($data["id"]); ?>">
		姓名：<input name='name' type="text" value="<?php echo ($data["name"]); ?>"/><br/>
		密码：<input name='password' type="text" value="<?php echo ($data["password"]); ?>"/><br/>
		<input type="submit" value="提交修改">
 	</form>
</body>
<html>