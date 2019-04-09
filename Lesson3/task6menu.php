<?php
    $menuItems = [
        'Главная',
        'Каталог' => ['Astra', 'Insignia', 'Zafira'],
        'Контакты' => ['О нас' => ['График работы', 'Адреса']]
    ];
    function menuConvert($item)
    {
        if (!is_array($item)) {
            return 'Неправильные данные';
        }
        $convertItem[] = '<ul>';
        foreach ($item as $key => $value) {
            if (is_array($value)) {
                $convertItem[] = '<li>' . $key . menuConvert($value) . '</li>';
            } else {
                $convertItem[] = '<li>' . $value . '</li>';
            }
        }
        $convertItem[] = '</ul>';
        return implode($convertItem);
    }
    echo menuConvert($menuItems);
    ?>