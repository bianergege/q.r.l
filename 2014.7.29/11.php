<form action="" name="score" method="post">
    请修改：<br>
    姓名：<input name="name" type="text"><br>
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
    <tr>
        <td>修改为</td>
        <td><input type="text" name ="score"</td>
        <input type="submit" name="submit" value="确定" />
    </tr>

    </table>

</form>

<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
$con = mysql_connect("localhost","root","");
mysql_select_db("qrl",$con);
mysql_query("SET NAMES utf8");
$result = mysql_query("select stu_score.id from stu_score
			inner join stu_subject	on 	stu_subject.id=stu_score.oid
			inner join stu_term		on 	stu_term.id=stu_subject.oid
			inner join stu_grade	on 	stu_grade.id=stu_term.oid
			inner join stu_student 	on 	stu_student.id=stu_grade.oid
		where stu_student.name='".$_POST['name']."'
				and stu_grade.grade='".$_POST['grade']."'
				and stu_term.term='".$_POST['term']."'
				and stu_subject.subject='".$_POST['subject']."'");

$query = mysql_fetch_array($result);

if(!empty($_POST)){
    if($query){
        //echo $query['id'];
        $sql = "UPDATE stu_score SET score = '".$_POST['score']."' where id = '".$query['id']."'";
        mysql_query($sql);
        echo "<script>alert('修改成功！')</script>";
    }else{
        echo "<script>alert('不存在！')</script>";
        exit;
    }
}
mysql_close($con);
?>








