<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Index</title>
	<script>
	function jump(){
		window.location="/App/admin.php/User/add";
	}
	</script>
</head>
<body>
	<form action='__URL__/search' method='post'>
		姓名：<input type='text' name='name'/>
		<input type='submit' value='搜索'/>
	</form>
	<table border='1' width='500' align='center'>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>password</th>
			<th>操作</th>
		</tr>
		<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
				<td><?php echo ($vo["id"]); ?></td>
				<td><?php echo ($vo["name"]); ?></td>
				<td><?php echo ($vo["password"]); ?></td>
				<td><a href="http://localhost/APP/admin.php/User/del/id/<?php echo ($vo["id"]); ?>">删除</a> | <a href="http://localhost/APP/admin.php/User/modify/id/<?php echo ($vo["id"]); ?>">修改</a></td>
			</tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	<center>
	<button onclick="jump()">添加学生</button>
</center>
</body>
<html>