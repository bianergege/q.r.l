<?php
$password = "lampbrother";
echo md5($password)."<br>"; //输出MD5加密后的值
if(md5($password) == '9d04ebc09335c41d27768c12c530ef41'){
    echo "密码一致。登陆成功";
}
?>
