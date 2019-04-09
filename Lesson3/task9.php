<?php
$subject='какой-то текст для проверки';
$search = ' ';
$replace = '_';

function rus_to_eng($search, $replace, $subject) {
    $arrValue = array("а"=> "a", "б" => "b", "в" => "v", "г" => "g", "д" => "d", "е" => "e","ё" =>"ye", "ж"=> "zh", "з"=> "z","и"=> "i", "й"=> "y", "к"=> "k", "л"=> "l","м"=> "m", "н"=> "n", "о"=> "o", "п"=> "p","р"=> "r", "с"=> "s", "т"=> "t", "у"=> "u","ф"=> "f", "х"=> "kh", "ц"=> "ts", "ч"=> "ch","ш"=> "sh", "щ"=> "shch", "ъ"=> "\"", "ы"=> "a","ь"=> "'", "э"=> "e", "ю"=> "yu", "я"=> "ya");

    $modified = strtr($subject, $arrValue);
    return str_replace($search, $replace, $modified);
}
echo rus_to_eng($search, $replace, $subject);
?>