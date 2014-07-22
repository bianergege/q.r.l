<?php
class Person {
	protected $name;
	protected $sex;
	protected $age;

	function __construct($name="",$sex="男",$age=1){
		$this->name = $name;
		$this->sex = $sex;
		$this->age = $age;
	}

	function say(){
		echo "我的名字：".$this->name."，性别：".$this->sex."，年龄：".$this->age."。<br>";
	}
}

class Student extends Person {
	private $school;

	function __construct($name="",$sex="男",$age=1,$school=""){
		parent::__construct($name,$sex,$age);
		$this->school = $school;
	}

	function study(){
		echo $this->name."正在".$this->school."学习<br>";
	}

	function say(){
		parent::say();
		echo "在".$this->school."学校上学<br>";
	}
}

$student = new Student("张三","男",20,"edu");
$student->say();

?>