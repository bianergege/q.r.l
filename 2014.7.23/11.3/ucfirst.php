<?php
$lamp = "lamp is composed of Linux、Apache、MySQL and PHP";
echo strtolower( $lamp )."<br>"; //小写字母
echo strtoupper( $lamp )."<br>"; //大写字母
echo ucfirst( $lamp )."<br>"; // 字符串的首字母大写
echo ucwords( $lamp )."<br>"; //以空格分隔的单词首字母大写
echo ucfirst( strtolower($lamp)); // 一个字符串只有首字母大写
?>