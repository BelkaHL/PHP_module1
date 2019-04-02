<?php
$h1 = 'Добро пожаловать на сайт Opel!';
$title = 'Opel';
$current_year = date('Y');
?>

<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php
        echo $title;
        ?>
    </title>
    <!-- <title>Lesson 1</title> -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <div class="item logo">
            <img src="img/Logo_opel2beta.png" alt="Логотип Opel">
        </div>
        <div class="item text-logo">
            <h1>
                <?php
                echo $h1;
                ?>
            </h1>
            <!-- <h1>Добро пожаловать на сайт Opel!</h1> -->
            <p>Сегодня:
                <?php
                echo $date = date('D, d M Y H:i:s', time());
                ?>
            </p>
        </div>
        <div class="item item-1">
            <a href="astra_gtc.html"><img src="img/Opel_AstraGTC.jpg" alt="Opel Astra GTC"></a>
            <div class="item-text">
                <p class="slogan">Спортивная динамичность</p>
                <h3 class="model"><a href="astra_gtc.html" class="car-pages">Astra GTC</a></h3>
            </div>
        </div>
        <div class="item item-2">
            <a href="astra_hatchback.html"><img src="img/Opel_Astra_Hatchback.jpg" alt="Opel Astra Hatchback"></a>
            <div class="item-text">
                <p class="slogan">Элегантность и стиль</p>
                <h3 class="model"><a href="astra_hatchback.html" class="car-pages">Astra Hatchback</a></h3>
            </div>
        </div>
        <div class="item item-3">
            <a href="Insignia_CT.html"><img src="img/Opel_Insignia_Country_Tourer.jpg" alt="Opel Insignia Country Tourer"></a>
            <div class="item-text">
                <p class="slogan">Вдохновляющий на приключения</p>
                <h3 class="model" style="padding-top: 0.5em"><a href="Insignia_CT.html" class="car-pages">Insignia
                        Country Tourer</a></h3>

            </div>
        </div>
        <div class="item item-4">
            <img src="img/Opel_Insignia_Hatchback.jpg" alt="Opel Insignia Hatchback">
            <div class="item-text">
                <p class="slogan">Продуманный и элегантный</p>
                <h3 class="model">Insignia Hatchback</h3>
            </div>
        </div>
        <div class="item item-5">
            <img src="img/Opel_ZafiraTourer.jpg" alt="Opel ZafiraTourer">
            <div class="item-text">
                <p class="slogan">Высокая вместительность и стиль</p>
                <h3 class="model" style="padding-top: 0.5em">Zafira Tourer</h3>
            </div>
        </div>
        <div class="item item-6">
            <img src="img/Opel_Antara.jpg" alt="Opel Antara">
            <div class="item-text">
                <p class="slogan">Солидность и функциональность</p>
                <h3 class="model" style="padding-top: 0.5em">Antara</h3>
            </div>
    </main>
</body>
<footer>
    <div class="footer-content">
        <div class="footer-text">
            <p class="text-license">
                <?php
                echo 'All rights reserved ' . $current_year . ' year'; ?>
            </p>
            <h5 class="made">Made by BelkaHL</h5>
        </div>
    </div>
</footer>

</html> 