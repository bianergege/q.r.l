<?php
foreach( $_SERVER as $key => $value){
	echo '$_SERVER['.$key.'] = '.$value.'<br>';
}

echo '<pre>';
print_r( $_SERVER );
echo '</pre>';

echo $_SERVER['REMOTE_ADDR'];
?>