<?php
/**
 * Project:面向对象版图形计算器
 * file:circle.class.php
 * 声明了一个圆形子类，根据矩形的特点实现了形状抽象类中的周长和面积方法
 * package:shape
 */
class Circle extends Shape {
    private $radius = 0;

    /*圆形的构造方法，用表单$_POST中接收的半径初始化圆形对象*/
    function __construct(){
        $this->shapeName = "圆形";   //为形状命名

        //通过从shape中继承的方法validate（），对圆形的半径进行验证
        if( $this->validate($_POST['radius'],'半径')){
        $this->radius = $_POST['radius'];
        }
        else{
            exit;
        }
    }
    /*按圆形面积的计算公式，实现抽象类shape中的抽象方法area（）*/
    function area(){
        return pi()*$this->radius * $this->radius; //返回圆形的面积
    }

    /*按圆形周长的计算公式，实现抽象类shape中的抽象方法perimeter（）*/
    function perimeter(){
        return 2 * pi() * $this->radius;  //返回圆形的周长
    }
}

?>