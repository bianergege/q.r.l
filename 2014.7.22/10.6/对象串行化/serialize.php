<?php
require "person.class.php"; // 在本文件中包含Person类所在的脚本文件
$person = new Person("张三","男",20);
$person_string = serialize($person);
file_put_contents("file.txt",$person_string);
?>
