<?php
$val = rand(-20, 20);
$pow = rand(-10, 10);

echo 'Заданное число = ' . $val . '<br>';
echo 'Степень = ' . $pow.'<br>';

function power($val, $pow)
{
    if ($pow == 0) {
        return 1;
    } 
    elseif ($pow < 0) {
        return power(1 / $val, -$pow);
    }
    return $val * power($val, $pow-1);
}

echo 'Результат возведения в степень = '.power($val, $pow);
?>