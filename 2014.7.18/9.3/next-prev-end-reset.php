<?php
$contact = array("ID" => 1,"姓名" => "高某", "公司" => "A公司", "地址" => "北京市","电话" => "(010)98765432", "EMAIL" => "gao@brophp.com");

echo '第一个元素：'.key($contact). '=>'.current($contact).'<br>';
echo '第一个元素：'.key($contact). '=>'.current($contact).'<br>';

next($contact);
next($contact);
echo '第三个元素：'.key($contact). '=>'.current($contact).'<br>';

end($contact);
echo '最后一个元素：'.key($contact).'=>'.current($contact).'<br>';

prev($contact);
echo '最后第二个元素：'.key($contact).'=>'.current($contact).'<br>';

reset($contact);
echo '又回到了第一个元素：'.key($contact).'=>'.current($contact).'<br>';
?>