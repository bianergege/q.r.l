<?php

//声明一个Person类，包含三个成员属性和一个成员方法
class Person
{
    private $name;
    private $sex;
    private $age;

    /**
     * @param string $name
     * @param string $sex
     * @param string $age
     */
    function __construct($name = "", $sex = "", $age = "")
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    function say(){
        echo "我的名字：".$this->name."，性别：".$this->sex."，年龄：".$this->age."<br>";
    }
}
?>