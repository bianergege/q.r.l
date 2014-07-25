<?php
class Box {
    private $length;
    private $width;
    private $height;

    public function setLength($length){
        $this->length = $length;
    }
    public function setWidth($width){
        $this->width = $width;
    }
    public function setHeight($height){
        $this->height = $height;
    }

    public function getLength($length){
        return $this->length = $length;
    }
    public function getWidth($width){
        return $this->width = $width;
    }
    public function getHeight($height){
        return $this->height = $height;
    }

    function computArea(){
        $area = 2*($this->length*$this->width+$this->length*$this->height+$this->width*$this->height);
        return $area;
    }

    function computVolume(){
        $volume = $this->length*$this->width*$this->height;
        return $volume;
    }

    function display(){
        $area = $this->computArea();
        $volume = $this->computVolume();
        echo "长：".$this->length."&nbsp宽：".$this->width."&nbsp高：".$this->height."<br>";
        echo "长方体的表面积为：". $area."<br>长方体的体积为：".$volume;
    }
}

$rect = new Box;
$rect->setLength("2");
$rect->setWidth("2");
$rect->setHeight("3");
$rect->display();
?>
