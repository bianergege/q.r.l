<?php
$contact = array("ID" => 1,"姓名" => "高某", "公司" => "A公司","地址" => "北京市");
$id = each($contact);
print_r($id);

$name = each($contact);
print_r($name);

$company = each($contact);
print_r($company);

$address = each($contact);
print_r($address);

$no = each($contact);
var_dump($no);
?>