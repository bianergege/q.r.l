<?php
    //声明一个DB类（数据库操作类）的简单操作模型
class DB {
    //声明一个私有成员属性数组，主要是通过下标来定义可以参加连贯操作的全部方法名称
    private $sql = array("field" => "","where" => "","order" => "", "limit" => "", "group" => "", "having" => "");
    //连贯操作调用field() where() order() limit() group() having()方法，组合SQL语句
    function __call($methodName, $args){
        //将第一个参数（代表不存在方法的方法名称），全部转成小写方式，获取方法名称
        $methodName = strtolower($methodName);

        //如果调用的方法名和成员属性数组$sql下标对应上，则将第二个参数给数组中下标对应的元素
        if(array_key_exists($methodName,$this->sql)){
            $this->sql[$methodName] = $args[0];
        }else{
            echo '调用类'.get_class($this).'中的方法'.$methodName.'（）不存在';
        }
        //返回自己对象，则可以继续调用本对象中的方法，形成连贯操作
        return $this;
    }
    //简单的应用，没有实际意义，只是输出连贯操作后组合的一个SQL语句，是连贯操作最后调用的一个方法
    function select(){
        echo "SELECT FROM {$this->sql['field']} user {$this->sql['where']} {$this->sql['order']} {$this->sql['limit']} {$this->sql['group']} {$this->sql['having']}";
    }
}

$db = new DB;
//连贯操作，也可以分为多行去连续调用多个方法
$db ->field('sex,count(sex)')
    ->where('where sex in ("男","女")')
    ->group('group by sex')
    ->having('having avg(age) > 25')
    ->select();

//若果调用的方法不存在，也会有提示，下面演示的就是调用一个不存在的方法query（）
$db -> query('select * from user');
?>