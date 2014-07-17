<?php
$score = array(9,8,10,7,9,7,8,7,9,10);
echo "评委打分分别为：";
for($i=0;$i<10;$i++){
	echo $score[$i].',';
}
sort($score);
$average=0;
for($i=1;$i<9;$i++){
	$average+=$score[$i];
}
echo '<br/>'."去掉一个最高分和一个最低分后的平均分为：".$average/8;
?>