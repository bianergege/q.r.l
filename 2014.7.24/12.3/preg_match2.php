<?php
//一个用于匹配URL的正则表达式
$pattern = '/(https?|ftps?):\/\/(www|bbs)\.([^\.\/]+)\.(com|net|org)(\w-\.\/\?\%\&\=]*)?/i';
//被搜索的字符串
$subject = "网址为http://www.baidu.com的位置是百度";
//使用preg_match()函数匹配
if(preg_match($pattern,$subject,$matches)){
    echo "搜索到的URL为：".$matches[0]."<br>"; //数组中的第一个元素保存全部匹配结果
    echo "URL中的协议为：".$matches[1]."<br>"; //数组中的第二个元素保存第一个子表达式
    echo "URL中的主机为：".$matches[2]."<br>";
    echo "URL中的域名为：".$matches[3]."<br>";
    echo "URL中的顶域为：".$matches[4]."<br>";
}else
    echo "搜索失败";                           //如果和正则表达式没有匹配成功则输出

?>