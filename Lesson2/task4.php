<?php
$arg1 = rand(0, 100);
$arg2 = rand(0, 100); //0; //Тестовое для проверки деления
$arrOperation = array("+", "-", "*", "/");
$operation = $arrOperation[array_rand($arrOperation)];

echo 'operation= ' . $operation . '<br>';
echo 'a= ' . $arg1 . '<br>';
echo 'b= ' . $arg2 . '<br>';

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "+":
            return $arg1 + $arg2;
            break;

        case "-":
            return $arg1 - $arg2;
            break;

        case "*":
            return $arg1 * $arg2;
            break;

        case "/":
            if ($arg2 == 0) {
                return 'Ошибка. Деление на ноль!';
            } else {
                return $arg1 / $arg2;
            }
            break;
    }
}

echo '<br>' . $arg1, $operation, $arg2, ' = ' . mathOperation($arg1, $arg2, $operation);
?>