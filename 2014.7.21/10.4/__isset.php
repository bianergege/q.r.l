<?php
class Person{
	private $name;
	private $sex;
	private $age;

	function __construct($name="",$sex="男",$age=1){
		$this->name = $name;
		$this->sex = $sex;
		$this->age = $age;
	}

	private function __isset($propertyName){
		if($propertyName == "name")
			return false;
		return isset($this->$propertyName);
	}

	private function __unset($propertyName){
		if($propertyName == "name")
			return;
		unset($this->$propertyName);
	}

	public function say(){
		echo "我的名字：".$this->name."，性别：".$this->sex."，年龄：".$this->age."。<br>";
	}
}

$person1 = new Person("张三","男",40);
 
var_dump(isset($person1->name));
var_dump(isset($person1->sex));
var_dump(isset($person1->age));
var_dump(isset($person1->id));

unset($person1->name);
unset($person1->sex);
unset($person1->age);

$person1->say();

?>