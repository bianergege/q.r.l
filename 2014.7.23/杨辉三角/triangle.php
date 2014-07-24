<?php
function pascal($i){
    $s = array();
    $s[0][0] = 1;
    $s[1][0] = 1;
    $s[1][1] = 1;
    for($j = 2;$j < $i;$j++){
        $s[$j][0] = 1;
        $s[$j][$j] = 1;
        for($k = 1;$k < $j;$k++){
            $s[$j][$k] = $s[$j-1][$k-1]+$s[$j-1][$k];
        }
    }

    for($j = 0;$j < $i;$j++){
        for($n = 0;$i-$j-$n > 0;$n++)
        {
            echo "&nbsp";
        }
        for ($k = 0;$k < $j+1;$k++){
            echo $s[$j][$k]."&nbsp";
        }
        echo "<br>";
    }
}

pascal(10);

?>