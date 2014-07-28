<form action="" name="mima" method="post">
    <table align = "left">
        <tr>
            <td>姓名</td>
            <td><input type="text" name ="name"</td>
        </tr>
        <tr>
            <td>当前密码</td>
            <td><input type="password" name ="password"</td>
        </tr>

        <tr>
            <td>新密码</td>
            <td><input type="password" name ="passwd"</td>
        </tr>

        <tr>
            <td>确认密码</td>
            <td><input type="password" name ="passwd2"</td>
        </tr>

        <tr>
            <td><input value="确认" type="submit"></td>
        </tr>
    </table>
</form>

<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$name = $_POST["name"];  //name->id
$pass = $_POST["password"];
$pass1 = $_POST["passwd"];
$pass2 = $_POST["passwd2"];
$conn = mysql_connect("localhost","root","");
mysql_select_db("1",$conn);
mysql_query("SET NAMES utf8");
$result = mysql_query("SELECT * FROM stu_student WHERE name='".$name."' AND password='".$pass."'");  //name->id
$query = mysql_fetch_array($result);
if(!empty($_POST)){
if($query){
    if($pass1 == $pass2)
    {
        $sql1 = "UPDATE stu_student SET password = '".$pass1."' WHERE name = '".$name."'";  //name->id
        mysql_query($sql1);
        echo "<script>alert('修改密码成功！')</script>";
    }else{
        echo "<script>alert('两次输入新密码不同！')</script>";
    }
}else
    echo "<script>alert('原密码输入错误')</script>";
}

mysql_close($conn);
?>
