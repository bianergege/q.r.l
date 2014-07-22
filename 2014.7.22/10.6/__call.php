<?php
//声明一个测试类，在类中声明printHello()和_call()方法
class TestClass {
	function printHello(){
		echo "Hello<br>";
	}

    /**
     * 声明魔术方法__call()，用来处理调用对象中不存在的方法
     * @param string $functionName 访问不存的成员方法名称字符串
     * @param array $args          访问不存的成员方法中传递的参数数组
     */
    function __call($functionName,$args){
        echo "你所调用的函数：".$functionName."（参数：";
        print_r($args);
        echo "）不存在！<br>\n";
    }
}

$obj = new TestClass();
$obj -> myFun("one",2,"three");
$obj -> otherFun(8,9);
$obj -> printHello();
?>