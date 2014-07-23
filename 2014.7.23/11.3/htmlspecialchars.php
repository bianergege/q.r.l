<html>
<body>
<?php
$str = "<B>WebServer:</B> & 'Linux' & 'Apache'";
echo htmlspecialchars($str,ENT_COMPAT);
echo "<br>\n";
echo htmlspecialchars($str,ENT_QUOTES);
echo "<br>\n";
echo htmlspecialchars($str,ENT_NOQUOTES);
?>
</body>
</html>