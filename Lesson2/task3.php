<?php
$a = rand(0, 100);
$b = rand(0, 100);

echo 'a= ' . $a . '<br>';
echo 'b= ' . $b;

function addition($a, $b)
{
    return $a + $b;
}
echo '<br>' . 'Сумма чисел = ' . addition($a, $b);


/*function addition($a, $b): int {
    return $a+$b;
}
echo '<br>'.'Сумма чисел = '.addition($a, $b); */

function subtraction($a, $b)
{
    return $a - $b;
}
echo '<br>' . 'Разность чисел = ' . subtraction($a, $b);

function multiplication($a, $b)
{
    return $a * $b;
}
echo '<br>' . 'Произведение чисел = ' . multiplication($a, $b);

function division($a, $b)
{
    if ($b == 0) {
        return 'Ошибка. Деление на ноль!';
    } else {
        return $a / $b;
    }
}
echo '<br>' . 'Частное чисел = ' . division($a, $b);
?>