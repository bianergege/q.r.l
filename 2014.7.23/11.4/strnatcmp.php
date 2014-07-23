<?php
//定义一个包含数字值的数组
$files = array("file11.txt","file22.txt","file1.txt","file2.txt");
/**
 * @param $arr             为被排序数组
 * @param bool $select     选择用哪个函数进行比较，true为strcmp（），false为strnatcmp（）函数
 * @return mixed           返回排序后的数组
 */
function mySort($arr,$select=false){
    for($i=0;$i<count($arr);$i++){
        for($j=0;$j<count($arr)-1;$j++){
            //如果第二个参数为true，则使用strcmp（）函数比较大小
            if($select){
                //前后两个值比较结果大于0则交换位置
                if(strcmp($arr[$j],$arr[$j+1]) > 0){
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
                //如果第二个参数为false则使用strnatcmp（）函数比较大小
            }else{
                //如果比较大小的结果大于0交换位置
                if(strnatcmp($arr[$j],$arr[$j+1]) > 0){
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }
        }
    }
    return $arr; //返回排序后的数组
}
print_r(mySort($files,true)); //选择按字节顺序排序
print_r(mySort($files,false)); //选择按自然顺序排序

?>
