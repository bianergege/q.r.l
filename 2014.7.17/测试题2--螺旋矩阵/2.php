<?php
$size = 8;
$array = array();
//绕圈方向 0 向下 1 向右 2 向左 3 向上
$orient = 0;
// j 行索引 k 列索引
for ($i = 1, $j = 0, $k = 0; $i <= $size * $size; $i++) {
    $array[$j][$k] = $i;
    if ($j + $k == $size - 1) {
        if ($j > $k) {
            $orient = 1;
        } else {
            $orient = 2;
        }
    } else if ($k == $j && ($k >= $size / 2)) {
        $orient = 3;
    } else if (($j == $k - 1) && ($k <= $size / 2)) {
        $orient = 0;
    }
    switch ($orient) {
        case 0:
            $j++;
            break;
        case 1:
            $k++;
            break;
        case 2;
            $k--;
            break;
        case 3;
            $j--;
            break;
    }
}
for ($i = 0; $i < $size; $i++) {
    for ($j = 0; $j < $size; $j++) {
        if ($array[$i][$j] < 10) {
            print '0' . $array[$i][$j] . '&nbsp;';
        } else {
            print $array[$i][$j] . '&nbsp;';
        }
    }
    print '<br/>';
}