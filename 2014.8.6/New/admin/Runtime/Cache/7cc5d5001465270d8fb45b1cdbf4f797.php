<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>add</title>
</head>
<body>
	<form action="__URL__/create" method='post'>
		姓名：<input name='name' type="text" value="<?php echo ($data["name"]); ?>"/><br/>
		密码：<input name='password' type="text" value="<?php echo ($data["password"]); ?>"/><br/>
		<input type="submit" value="添加新学生"/>
 	</form>
</body>
<html>