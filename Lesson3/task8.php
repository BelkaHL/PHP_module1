<?php

$arrCity = array(
    'Московская область:'=> array('Москва', 'Зеленоград', 'Клин'), 
    'Ленинградская область:' => array('Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'),
    'Рязанская область:' => array('Рязань', 'Михайлов', 'Сасово'),
);

// function outputCity($arrValue) {
//     if (!is_array($arrValue)) {
//         return print 'Неправильные данные';
//     }
//     foreach ($arrValue as $key => $value) {
//         echo $key.'<br>';
//         for ($i = 0; $i <$arrValueLenght = count($arrValue[$key]); $i++) {
//             if ($i ==$arrValueLenght-1) {
//                 echo $arrValue[$key][$i].'.'.'<br>';
//             }
//             else {
//                 echo $arrValue[$key][$i].', ';
//             }
//         }
//     }
// }
//outputCity($arrCity);

function citySearch($char, $arrValue) {

    if (!is_array($arrValue) || !is_string($char)) {
        return print 'Неправильные данные';
    }
    $falseCity = 0;
    $counterCity = count($arrValue, COUNT_RECURSIVE) - count($arrValue);
    foreach ($arrValue as $key => $value) {
        for ($i = 0; $i < count($arrValue[$key]); $i++) {
            $gapArr = preg_split('//u', $arrValue[$key][$i], 0, PREG_SPLIT_NO_EMPTY);
            if ($gapArr[0] == $char) {
                echo implode($gapArr).'<br>';
            }
            else {
                $falseCity++;
                if ($falseCity == $counterCity) {
                    return print 'В массиве нет городов на букву "{$char}"';
                }
            }
        }
    }
}
citySearch('К', $arrCity);

?>