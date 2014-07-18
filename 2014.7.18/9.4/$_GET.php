<?php
echo '参数为 action 为：'.$_GET["action"].'<br>';
echo '参数为 user 为：'.$_GET["user"].'<br>';
echo '参数为 tid 为：'.$_GET["tid"].'<br>';
echo '参数为 page 为：'.$_GET["page"].'<br>';

echo '<pre>';
print_r( $_GET );
echo '</pre>';
?>