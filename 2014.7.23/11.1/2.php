<?php
$lamp = array( 'os'=>'Linux','webserver'=>'Apache','db'=>'MySQL','language'=>'php');
//可以解析
echo "A OS is $lamp[os]";
//不能解析 echo "A OS is $lamp['os'].";
//可以解析
echo "A OS is {$lamp['os']}.";
//可以解析
echo "A OS is {$lamp[os]}.";
//可以解析
echo "This square is $square->width meters broad.";
//不能解析，可以使用花括号解决 echo "This square is $square->width00 centimeters broad.";

//可以解析
echo "This square is {$square->width}00 centimeters broad.";

?>