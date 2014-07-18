<form action = "riqi.php" method="post" action="">
    请输入1901.12.14~2038.1.19间任意日期：<br/>
    年：<input type="text" name="Y" >
    月：<input type="text" name="m">
    日：<input type="text" name="d">
    <input type="submit"  value="send"/>
</form>

<?php
foreach($_POST as $key =>$value){
	echo $key .':'. $value.'<br/>';
}
if(!empty($_POST))
{
	$time = strtotime($_POST["Y"].'-'.$_POST["m"].'-'.$_POST["d"]);

	if($_POST["m"]>12)
		echo "输入月份有误！";

    else if($_POST["m"]==1 || $_POST["m"]==3 || $_POST["m"]==5 || $_POST["m"]==7 || $_POST["m"]==8 || $_POST["m"]==10 || $_POST["m"]==12){
    	if ($_POST["d"]>31)
    		echo "输入日期有误！";
    			else 
    				echo "这一天是这一年的第".(date('z',$time)+1)."天";
    }

    else if($_POST["m"]==4 || $_POST["m"]==6 || $_POST["m"]==9 || $_POST["m"]==11){
    	if ($_POST["d"]>30)
    		echo "输入日期有误！";
    			else 
    				echo "这一天是这一年的第".(date('z',$time)+1)."天";
    }
    
     if ($_POST["m"] == 2){
    	if($_POST["Y"]%4==0 && $_POST["Y"]%100!==0 || $_POST["Y"]%100==0){
    		if ($_POST["d"]>29)
    			echo "输入日期有误！";
    		else 
    			echo "这一天是这一年的第".(date('z',$time)+1)."天";
    	}
    	else {
    	 	if ($_POST["d"]>28)
    	 		echo "输入日期有误！";
    	 	else 
    	 		echo "这一天是这一年的第".(date('z',$time)+1)."天";
    	}
    }

}
?>