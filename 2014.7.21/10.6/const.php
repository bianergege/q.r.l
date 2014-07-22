<?php
class MyClass{
	const CONSTANT = 'CONSTANT value';

	function showConstant(){
		echo self::CONSTANT."<br>";
	}
}

echo MyClass::CONSTANT."<br>";
$class = new MyClass();
$class->showContant();

?>