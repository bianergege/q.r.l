<?php
function table($tableName,$rows,$cols)
{
	echo "<table align='center' border='1' width='600'>";
	echo "<caption><h1> $tableName </h1></caption>";

	for($out=0;$out<$rows;$out++)
	{
		$bgcolor=$out%2==0 ? "#FFFFFF" : "#DDDDDD";
		echo "<tr bgcolor=".$bgcolor.">";

		for($in=0;$in<$cols;$in++)
		{
			echo "<td>".($out*$cols+$in)."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

table("第一个3行4列的表",3,4);
table("第二个2行10列的表",2,10);
table("第三个5行5列的表",5,5);

?>