<?php

$arrCity = array(
    'Московская область:'=> array('Москва', 'Зеленоград', 'Клин'), 
    'Ленинградская область:' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
    'Рязанская область:' => array('Рязань', 'Михайлов', 'Сасово'),
);

function outputCity($arrValue) {
    if (!is_array($arrValue)) {
        return print 'Неправильные данные';
    }
    foreach ($arrValue as $key => $value) {
        echo $key.'<br>';
        for ($i = 0; $i <$arrValueLenght = count($arrValue[$key]); $i++) {
            if ($i ==$arrValueLenght-1) {
                echo $arrValue[$key][$i].'.'.'<br>';
            }
            else {
                echo $arrValue[$key][$i].', ';
            }
        }
    }
}
//print_r($arrCity);
outputCity($arrCity);

?>