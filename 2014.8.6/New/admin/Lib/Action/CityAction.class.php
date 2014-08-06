<?php
/*class CityAction extends Action {
    public function _empty($name){
        //把所有城市的操作解析到city方法
        $this->city($name);
    }
    //注意city方法，本身是protected方法
    protected function city($name){
        echo "当前城市：".$name;
    }
}*/

/*class EmptyAction extends Action {
    public function index(){
        $cityName = MODULE_NAME;
        $this->city($cityName);
    }
    //注意city方法，本身是protected方法
    protected function city($name){
        echo "当前城市：".$name;
    }
}*/

/*class CityAction extends Action {
    //前置操作方法
    public function _before_index(){
        echo 'before<br/>';
    }
    public function index(){
        echo 'index<br/>';
    }
    //后置操作方法
    public function _after_index(){
        echo 'after<br/>';
    }
}*/

class CityAction extends Action{
    public function update(){
        if($this->isPost()){
            $User = M('Student');
            $User->create();
            $User->save();
            $this->success('保存完成！');
        }else{
            $this->error('非法请求');
        }
    }
}

?>