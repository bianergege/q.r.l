<form action="3.php" method="post" action="">
   请输入数字：<input type="text" name="num" >
    <input type="submit" value="send"/>
</form>
<?php
class A {
    public $v = 100;
    function construct(){
        $this->v = $v;
    }


}

class Guess extends A{
    var $b;

    function construct(){
        parent::__construct($v);
        $this->b = $b;

    }

    public function compare(){
        if(!empty($this->b)){
            echo "您输入的数字为：".$this->b.'<br>';
            if($this->b < $this->v)
                echo "小了";
            else if($this->b > $this->v)
                echo "大了";
            else
                echo "猜测成功！";
    }
    }
}

$guess = new Guess;
$guess->b = $_POST["num"];
$guess-> compare();
?>