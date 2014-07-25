<?php
//一个用于匹配URL的正则表达式
$pattern = '/(https?|ftps?):\/\/(www|bbs)\.([^\.\/]+)\.(com|net|org)(\w-\.\/\?\%\&\=]*)?/i';
//一个包含多个URL链接·地址的多行文字
$subject = "网址为http://bbs.lampbrother.com的位置是LAMP兄弟连,网址为http://www.baidu.com的位置是百度,网址为http://www.geogle.com的位置是谷歌。";

$i = 1;

if(preg_match_all($pattern,$subject,$matches,PREG_SET_ORDER)){
    //循环遍历二维数组$matches
    foreach($matches as $urls){
        echo "搜索到第".$i."个URL为：".$urls[0]."<br>";
        echo "第".$i."个URL中的协议为：".$urls[1]."<br>";
        echo "第".$i."个URL中的主机为：".$urls[2]."<br>";
        echo "第".$i."个URL中的域名为：".$urls[3]."<br>";
        echo "第".$i."个URL中的顶域为：".$urls[4]."<br>";

        $i++;
    }
}else
    echo "搜索失败！";

?>