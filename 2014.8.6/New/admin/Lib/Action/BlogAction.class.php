<?php
class BlogAction extends Action {
    public function read($id){
        echo 'id='.$id;
        $Blog = M('Blog');
        $Blog -> find($id);
    }
    public function archive($year='2021',$month='01'){
        echo 'year='.$year.'&momth='.$month;
        $Blog = M('Blog');
        $year = $year;
        $month = $month;
        $begin_time = strtotime($year . $month ."01");
        $end_time = strtotime("+1 month",$begin_time);
        $map['create_time'] = array(array('gt',$begin_time),array('lt',$end_time));
        $map['status'] = 1;
        $list = $Blog->where($map)->select();
    }
}