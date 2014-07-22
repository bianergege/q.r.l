<?php
class MyClass{
	protected $var1 = 100;

	protected function printHello(){
		echo "hello<br>";
	}
}

class MyClass2 extends MyClass{
	function useProperty(){
		echo "输出从父类继承过来的成员属性值".$this->var1."<br>";
		$this->printHello();
	}
}

$subObj = new MyClass2();
$subObj->useProperty();


?>