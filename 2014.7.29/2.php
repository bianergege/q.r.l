<?php
header("Content-Type: text/html; charset=utf8");

	$name = "石强";
	$ID = 4;
	$grade = $_POST['grade'];
	$term = $_POST['term'] ;
	$subject = $_POST['subject'];
	$score = $_POST['score'];

	$con = mysql_connect("localhost", 'root', '');
	if (!$con) {
		die("连接失败。");
	}

	mysql_select_db("qrl", $con) or die("切换失败。");
	mysql_query("SET NAMES utf8");

	$sql = "select * from stu_grade where oid = $ID and grade='".$grade."';";
	$res = mysql_query($sql) or die(mysql_error());
	$row = mysql_fetch_array($res);
	if (!$row) {
		$sql = "insert into stu_grade(grade, oid) values('".$grade."',$ID)";
		mysql_query($sql) or die(mysql_error());
		$getID=mysql_insert_id();
	
		$sql = "insert into stu_term(term, oid) values('".$term."',$getID)";
		mysql_query($sql) or die(mysql_error());
		$getID=mysql_insert_id();
	
		$sql = "insert into stu_subject(subject, oid) values('".$subject."',$getID)";
		mysql_query($sql) or die(mysql_error());
		$getID=mysql_insert_id();

		$sql = "insert into stu_score(score, oid) values('".$score."',$getID)";
		mysql_query($sql) or die(mysql_error());
	} else {
		$ID = $row['id'];
		$sql = "select * from stu_term where oid = $ID and term='".$term."';";
		$res = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($res);
		if (!$row) {
			echo "hello";
			$sql = "insert into stu_term(term, oid) values('".$term."',$ID)";
			mysql_query($sql) or die(mysql_error());
			$getID=mysql_insert_id();
	
			$sql = "insert into stu_subject(subject, oid) values('".$subject."',$getID)";
			mysql_query($sql) or die(mysql_error());
			$getID=mysql_insert_id();

			$sql = "insert into stu_score(score, oid) values('".$score."',$getID)";
			mysql_query($sql) or die(mysql_error());
		} else {
			echo "hello3";
			$ID = $row['id'];
			$sql = "select * from stu_subject where oid = $ID and subject='".$subject."';";
			$res = mysql_query($sql) or die(mysql_error());
			$row = mysql_fetch_array($res);
			if (!$row) {
				$sql = "insert into stu_subject(subject, oid) values('".$subject."',$ID)";
				mysql_query($sql) or die(mysql_error());
				$getID=mysql_insert_id();
	

				$sql = "insert into stu_score(score, oid) values('".$score."',$getID)";
				mysql_query($sql) or die(mysql_error());
			} else {
				$ID = $row['id'];
				$sql = "UPDATE stu_score SET score =$score where oid=$ID";
				mysql_query($sql) or die(mysql_error());
			}
		}
	}


/*	$sql = "insert into stu_student(name, password) values('".$n."','".$p."')";
	mysql_query($sql) or die(mysql_error());
	$getID=mysql_insert_id();
	
	$sql = "insert into stu_grade(grade, oid) values('".$g."',$getID)";
	mysql_query($sql) or die(mysql_error());
	$getID=mysql_insert_id();
	
	$sql = "insert into stu_term(term, oid) values('".$t."',$getID)";
	mysql_query($sql) or die(mysql_error());
	$getID=mysql_insert_id();
	
	$sql = "insert into stu_subject(subject, oid) values('".$s."',$getID)";
	mysql_query($sql) or die(mysql_error());
	$getID=mysql_insert_id();

	$sql = "insert into stu_score(score, oid) values('".$score."',$getID)";
	mysql_query($sql) or die(mysql_error());
	
*/
	mysql_close();

		
?>