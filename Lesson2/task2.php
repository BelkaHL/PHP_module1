<?php

$a = rand(0, 15);

print_r('a= ' . $a . '<br>');

switch ($a) {
    default:
        echo implode(" ; ", array_keys(array_fill($a, 16 - $a, true)));
        break;
}
?>