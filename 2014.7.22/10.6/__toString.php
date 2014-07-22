<?php
class TestClass{
	private $foo;

	function __construct($foo){
		$this->foo = $foo;
	}

	public function __toString(){
		return $this->foo;
	}
}

$obj = new TestClass('Hello');
echo $obj;
?>