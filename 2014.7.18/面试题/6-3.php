<?php
$test = 'aaaaaa';
$abc =& $test;
unset($test);
echo $abc;
?>