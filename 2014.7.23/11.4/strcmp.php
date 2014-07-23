<?php
$userName = "Admin"; //声明一个字符串作为用户名
$password = "lampBrother";  //声明一个字符串作为密码

//不区分大小写的比较
if(strcasecmp($userName,"admin") == 0 ){
    echo "用户名存在<br>";
}

//区分大小写的比较
switch(strcmp($password,"lampbrother")){
    case 0:
    echo "两个字符串相等<br>";break;
    case 1:                                         //第一个字符串大时返回1
    echo "第一个字符串大于第二个字符串<br>";break;
    case -1:                                        //第一个字符串小时返回-1
    echo "第一个字符串小于第二个字符串<br>";break;
}

?>