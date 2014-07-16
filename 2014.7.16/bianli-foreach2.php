<?php
$contact=array(
	"ID"=>1,"姓名"=>"高某","公司"=>"A公司","地址"=>"北京市","电话"=>"(010-98765432)","EMAIL"=>"gao@brophp.com"
	);
echo '<d1>一个联系人信息：';
foreach( $contact as $key=> $value)
{
	echo "<dd> $key : $value </dd>";
}
echo '</d1>';
?>