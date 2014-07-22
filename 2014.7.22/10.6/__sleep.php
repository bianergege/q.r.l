<?php

class Person {
    private $name;
    private $sex;
    private $age;

    /**
     * @param string $name
     * @param string $sex
     * @param string $age
     */
    function __construct($name="",$sex="",$age=""){
        $this->name = $name;
        $this->sex = $sex;
        $this->age = $age;
    }

    function say(){
        echo "我的名字：".$this->name."，性别：".$this->sex."，年龄：".$this->age."<br>";
    }

    //在类中自动添加此方法，在串行化时自动调用并返回数组
    function __sleep(){
        $arr = array("name","age");
        return ($arr);
    }

    //在反串行化对象时自动调用该方法，没有参数也没有返回值
    function __wakeup(){
        $this->age = 40;
    }
}

$person1 = new Person("张三","男",20);
//把一个对象串行化，返一个字符串，调用了__sleep()方法，忽略没在数组中的属性sex
$person_string = serialize($person1);
echo $person_string."<br>";

//反串行化对象，并自动调用了__wakeup()方法重新为新对象中的$age属性赋值
$person2 = unserialize($person_string);
$person2 -> say();
?>