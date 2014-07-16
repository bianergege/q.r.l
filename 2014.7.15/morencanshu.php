<?php
function person($name="张三",$age=20,$sex="男")
{
	echo "我的名字是：{$name},我的年龄为：{$age},性别：{$sex} <br>";
}

person();
person("李四");
person("王五",22);
person("贾六",18,"女");
?>