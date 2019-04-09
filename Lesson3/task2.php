<?php

$num = 0;
do {
    if ($num == 0) {
        echo $num.' - это ноль.'.'<br>';
        $num++;
    }
    elseif ($num % 2 == 0) {
        echo $num.' - четное число.'.'<br>';
        $num++;
    }
    else {
        echo $num.' - нечетное число.'.'<br>';
        $num++;
    }
} while ($num <= 10)

?>