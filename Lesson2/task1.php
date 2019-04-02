<?php
$a = rand(-99, 99);
$b = rand(-99, 99);

if ($a >= 0 && $b >= 0){
    echo 'a = '.$a.'<br>';
    echo 'b = '.$b.'<br>';
    echo 'Ответ a-b = '.($a - $b);
}
elseif (($a < 0 && $b >= 0) ^ ($a >= 0 && $b < 0)) {
    echo 'a = '.$a.'<br>';
    echo 'b = '.$b.'<br>';
    echo 'Ответ a+b = '.($a + $b);
}
else {
    echo 'a = '.$a.'<br>';
    echo 'b = '.$b.'<br>';
    echo 'Ответ a*b = '.($a * $b);
}
?>