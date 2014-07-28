<?php
$conn = mysql_connect("localhost","root","");     
mysql_select_db("qrl",$conn);
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM stu_student WHERE name='".$_POST['name']."' AND password='".$_POST['password']."'");

$query = mysql_fetch_array($result);
if($query){
$id = $query['id'];
 echo "<script>alert('登录成功！');location.href='select.php?id=$id';</script>";
}else
echo "<script>alert('用户名或密码错误，请重输!');location.href='login.php</script>";

mysql_close($conn); 
?>