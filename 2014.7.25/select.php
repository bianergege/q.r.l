<form method="post" action="">
    请选择查询内容：<br>
    年级:
    <select name="grade">
        <option></option>
        <option value="一">一年级</option>
        <option value="二">二年级</option>
        <option value="三">三年级</option>
        <option value="四">四年级</option>
        <option value="五">五年级</option>
        <option value="六">六年级</option>
    </select>
    学期：
    <select name="term">
        <option></option>
        <option value="上">上学期</option>
        <option value="下">下学期</option>
    </select>
    科目：
    <select name="subject">
        <option></option>
        <option value="语文">语文</option>
        <option value="数学">数学</option>
        <option value="英语">英语</option>
    </select>
    <input type="submit" name="Submit" value="提交" />
</form>

<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$id=$_GET['id'];
$con = mysql_connect("localhost","root","");
mysql_select_db("1",$con);
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * from stu_score WHERE id='$id' AND grade='".$_POST['grade']."' AND term='".$_POST['term']."' AND subject='".$_POST['subject']."'");

$query = mysql_fetch_array($result);
if(!empty($_POST)){
    if($query){
        echo $query['score'];
    }else
        echo "您查询的内容不存在！";
}

mysql_close($con);
?>




