<form action="" name="add" method="post">
    <table align = "left">
        <tr>
            <td>姓名</td>
            <td><input type="text" name ="name"</td>
        </tr>
        <tr>
            <td>密码</td>
            <td><input type="text" name ="password"</td>
        </tr>

        <tr>
            <td>年级</td>
            <td><input type="text" name ="grade"</td>
        </tr>

        <tr>
            <td>学期</td>
            <td><input type="text" name ="term"</td>
        </tr>

        <tr>
            <td>学科</td>
            <td><input type="text" name ="subject"</td>
        </tr>

        <tr>
            <td>分数</td>
            <td><input type="text" name ="score"</td>
        </tr>

        <tr>
            <td><input value="确认" type="submit"></td>
        </tr>
    </table>
</form>

<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$name = $_POST["name"];
$password = $_POST["password"];
$grade = $_POST["grade"];
$term = $_POST["term"];
$subject = $_POST["subject"];
$score = $_POST["score"];

$con = mysql_connect("localhost","root","");
mysql_select_db("qrl",$con);
mysql_query("SET NAMES utf8");

$sql = "insert into stu_student(name,password)values('" .$name . "','" .$password . "')";
$result = mysql_query ( $sql);
$ID=mysql_insert_id();

$sql = "insert into stu_grade(grade,oid)values('" .$grade . "','" .$ID . "')";
$result = mysql_query ( $sql);
$ID=mysql_insert_id();

$sql = "insert into stu_term(term,oid)values('" .$term . "','" .$ID . "')";
$result = mysql_query ( $sql);
$ID=mysql_insert_id();

$sql = "insert into stu_subject(subject,oid)values('".$subject ."','".$ID."')";
$result = mysql_query ( $sql);
$ID=mysql_insert_id();

$sql = "insert into stu_score(score,oid)values('" .$score . "','" .$ID . "')";
$result = mysql_query ( $sql);
mysql_close($con);
?>
