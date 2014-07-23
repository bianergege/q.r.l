<?php
$ur1 = "http://www.brophp.net";  //定义一个网络文件的位置
fopen($ur1,"r") or die("Unable to connect to $ur1"); // 如果打开文件失败则输出一条消息并退出程序
?>