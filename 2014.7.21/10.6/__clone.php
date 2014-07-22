<?php
class Person{
	private $name;
	private $sex;
	private $age;

	function __construct($name="",$sex="",$age=1){
		$this->name = $name;
		$this->sex = $sex;
		$this->age = $age;
	} 

	function __clone(){
		$this->name = "我是"."的副本";//$that不存在
		$this->age = 10;
	}

	function say(){
		echo "我的名字：".$this->name."，性别：".$this->sex."，年龄：".$this->age."<br>";
	}
}

$p1 = new Person("张三","男",20);
$p2 = clone $p1;

$p1 -> say();
$p2 -> say();

?>