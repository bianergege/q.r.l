<?php
$contact = array("ID" => 1,"姓名" => "高某","公司" => "A公司","地址" => "北京市");
list($key,$value) = each($contact);
echo "$key => $value";
?>