<?php
function get_arr($arr){
 unset($arr[0]);
}
$arr1 = array(1, 2);
$arr2 = array(1, 2);
get_arr($arr1);
get_arr($arr2);
echo count(&$arr1);
echo count($arr2);
?>