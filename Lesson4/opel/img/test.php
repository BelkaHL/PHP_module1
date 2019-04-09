<?php
 //Файл
$filename = 'Opel_AstraGTC.jpg';
$parsent = 1.5;

header('Content-Type: image/jpg'); //Тип содержимого

    //Получаем новые размеры
    list($width, $height) = getimagesize($filename);
    $new_width = $width * $parsent;
    $new_height = $height * $parsent;

    //Ресэмплирование
    $image_p = imagecreatetruecolor($new_width, $new_height);
    $image = imagecreatefromjpeg($filename);
    imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

//Вывод
imagejpeg($image_p, 'big'.$filename, 100);

//Освобождение памяти
imageinterlace($image_p);
?>