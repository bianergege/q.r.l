<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8">
	<title>Index</title>
</head>
<body>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["id"]); ?>-----<?php echo ($vo["name"]); ?>-----<?php echo ($vo["password"]); ?><br/><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
<html>