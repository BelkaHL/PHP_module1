<?php
function currentEnd($value, $currentEnd) {
    $remainder = $value % 100;
    if ($remainder > 20 || $remainder > 0 && $remainder < 5 ) {
        if ($remainder % 10 == 1) {
            return $currentEnd[0];
        }
        elseif ($remainder % 10 <5 && $remainder > 1) {
            return $currentEnd[1];
        }
        else {
            return $currentEnd[2];
        }
    }
    else {
        return $currentEnd[2];
    }
}

function translateDate() {
    $arrHour = array('час', 'часа', 'часов');
    $arrMinute = array('минута', 'минуты', 'минут');

    return date('G').' '.currentEnd(date('H'), $arrHour).' '.date('m').' '.currentEnd(date('m'), $arrMinute);
}

echo translateDate();

?>