<?php
class Student {
    private $name;
    private $sex;
    private $age;
    private $address;

    function __construct($name="王",$sex="女",$age=20,$address="无锡"){
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
        $this->address = $address;
    }

    function display(){
        echo "姓名：".$this->name."<br>性别：".$this->sex."<br>年龄：".$this->age."<br>住址：".$this->address;
    }
}

$my = new Student;
$my -> display();
?>