<?php
abstract class Person {
    protected $name;
    protected $country;

    function __construct($name="",$country="china"){
        $this->name = $name;
        $this->country = $country;
    }

    //在抽象类中声明一个没有方法体的抽象方法，使用abstract关键字标识
    abstract function say();
    //在抽象类中声明另一个没有方法体的抽象方法，使用abstract关键字标识
    abstract function eat();
    //在抽象类中可以声明非常的非抽象的方法
    function run(){
        echo "使用两条腿走路<br>";  //有方法体，输出一条语句
    }
}

//声明一个类去继承抽象类Person
class ChineseMan extends Person{
    //将父类中的抽象方法覆盖，按自己的需求去实现
    function say(){
        echo $this->name."是".$this->country."人，讲汉语<br>"; //实现的内容
    }

    function eat(){
        echo $this->name."使用筷子吃饭<br>";
    }
}

//声明另一个类去继承抽象类Person
class Americans extends Person{
    function say(){
        echo $this->name."是".$this->country."人，讲英语<br>";
    }

    function eat(){
        echo $this->name."使用刀子和叉子吃饭<br>";
    }
}

$chineseMan = new ChineseMan("高洛峰","中国");
$americans = new Americans("alex","美国");

$chineseMan -> say();
$chineseMan -> eat();
$americans -> say();
$americans -> eat();
?>