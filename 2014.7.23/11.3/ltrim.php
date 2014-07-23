<?php
$str = "   lamp  ";
echo strlen( $str );
echo strlen( ltrim($str) );
echo strlen( rtrim($str) );
echo strlen( trim($str) );
$str = "123 This is a test...";
echo ltrim($str,"0..9");
echo rtrim($str,".");
echo trim($str,"0..9 A..Z .");

?>