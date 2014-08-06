<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	//$m = new Model('student');
    $m=M("student");
    $arr = $m->select();
    //$arr=$m->find(2);
    //$arr = $m->where('id=2')->getField('name');
    //dump($arr);
    //$m->name='小狗子';
    //$m->password=12345;
    //echo $m->add();
    //$m->delete(21);
    //$m->where('id=20')->delete();
    //$data['id']=2;
    //$data['name']='王佳瑜';
    //$count=$m->save($data);
    //echo $count;
    $this->assign('data',$arr);
    $this->display();
    }
    public function show(){
        $m=M();
        $result=$m->execute("insert into  stu_student(`name`) values('小白')");
        var_dump($result);
        //$m=M('Student');
        //$data['password']=1;
        //$c=$m->where('password')->count();
        //$c=$m->sum('id');
       // echo $c;
        //$data['name']=array('LIKE',array('%小%','%刚%'),'and');
        //$data['name']='小兔儿';
        //$data['_logic']='or';
        //$data['id']=array('between',array(5,20));
        //$data['id']=array('in',array(2,19,20));
        //$data['id']=array(array('gt',2),array('lt',20),'or');
        //$data['name']=array(array('like','%小%'),array('like','%王%'),'开发','or');
        //$arr=$m->where($data)->select();
        //$arr=$m->where("password=1 and name='开发'")->find();
        //var_dump($arr);
        $this->display();
    }

}

?>