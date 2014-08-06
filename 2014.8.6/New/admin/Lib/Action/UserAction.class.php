<?php
class UserAction extends Action{
	public function index(){
		//echo "你好";
		$m=M('Student');
		$arr=$m->select();
		//var_dump($arr);
		$this->assign('data',$arr);
		$this->display();
	}
	public function del(){
		$m=M('Student');
		$id=$_GET['id'];
		$count=$m->delete($id);
		if($count>0){
             $this->success('数据修改成功');
		}else{
             $this->error('数据删除失败');
		}
	}
    /*显示修改页面*/
	public function modify(){
		$id=$_GET['id'];
		$m=M('Student');
		$arr=$m->find($id);
		$this->assign('data',$arr);
		$this->display();
	}

	public function update(){
		$m=M('Student');
		$data['id']=$_POST['id'];
		$data['name']=$_POST['name'];
		$data['password']=$_POST['password'];
		$count=$m->save($data);
			if($count>0){
             $this->success('数据修改成功','index');
		}else{
             $this->error('数据修改失败');
		}
	}
    /*添加页面*/
	public function add(){
          $this->display();
	}

	public function create(){
        $m=M('Student');
        $m->name=$_POST['name'];
        $m->password=$_POST['password'];
        $idNum=$m->add();
        if($idNum>0){
             $this->success('数据添加成功','index');
		}else{
             $this->error('数据添加失败');
		}

	}
	//编写search方法，实现搜索
	public function search(){
		//var_dump($_POST);
		//获取post的数据，根据数据组装查询的条件，根据条件从数据库中获取数据，返回给页面遍历
		$where['name']=array('like',"%{$_POST['name']}%");

		$m=M('Student');
		$arr=$m->where($where)->select();
		$this->assign('data',$arr);
		$this->display('index');  //调用User模块下的index模板
	}

	public function demo(){
		$m=M('Student');
		$arr=$m->limit(2,10)->order(array('id'=>'desc'))->field(array('name','id'))->select();
		dump($arr);
		$this->show('abc');
	}
}
?>