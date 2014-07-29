<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("1", $con);
mysql_query("SET NAMES utf8");

$result = mysql_query("SELECT * FROM score");

echo "<table border='1'>
<tr>
<th>id</th>
<th>grade</th>
<th>term</th>
<th>subject</th>
<th>score</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['grade'] . "</td>";
  echo "<td>" . $row['term'] . "</td>";
  echo "<td>" . $row['subject'] . "</td>";
  echo "<td>" . $row['score'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";

mysql_close($con);
?>