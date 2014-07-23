<html>
<head>
    <title>HTML表单</title>
</head>
<body>
<form action="" method="post">
    请输入一个字符串：
    <input type="text" size="30" name="str" value="<?php echo html2Text(isset($_POST['str'])) ?>"/>
    <input type="submit" name="submit" value="提交"><br>
</form>
<?php
//如果用户提交表单下面代码将被执行
if(isset($_POST["submit"])){
    //输出原型<b><u>this is a \"test\"</u></b>，浏览器对其解析
    echo "原型输出：".$_POST['str']."<br>";
    //转换为实体
    echo "转换实例：".htmlspecialchars($_POST['str'])."<br>";
    //删除引号前面的斜线
    echo "删除斜线：".stripslashes($_POST['str'])."<br>";
    //输出
    echo "删除斜线和转换实体：".html2Text($_POST['str'])."<br>";
}

//自定义一个函数，复合飞方式处理表单提交的数据
function html2Text($input){
    //返回两个函数结合处理的字符串
    return htmlspecialchars( stripslashes( $input ) );
}
?>
</body>
</html>