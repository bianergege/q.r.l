<?php
class MyClass{
	static $count;

	function __construct(){
		self::$count++;
	}

	static function getCount(){
		return self::$count;
	}
}

MyClass::$count=0;
$myc1 = new MyClass();
$myc2 = new MyClass();
$myc3 = new MyClass();

echo MyClass::getCount();
echo $myc3->getCount();

?>