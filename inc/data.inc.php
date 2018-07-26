<?php
// Установка локали и выбор значений даты
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');

/*
* Получаем текущий час в виде строки от 00 до 23
* и приводим строку к целому числу от 0 до 23
*/
$hour = (int) strftime('%H');
$welcome = ''; // Инициализируем переменную для приветствия

// Присваиваем переменной $welcome исходя из периода времени
if ($hour>=0 && $hour<6) $welcome = 'Доброй ночи';
elseif ($hour>=6 && $hour<12) $welcome = 'Доброе утро';
elseif ($hour>=12 && $hour<18)$welcome = 'Добрый день';
elseif ($hour>=18 && $hour<23)$welcome = 'Добрый вечер';
else $welcome = 'Доброй ночи';

//Инициализация массива
$leftMenu = [
    ['link'=>'Домой', 'href'=>'index.php'],
    ['link'=>'О нас', 'href'=>'index.php?id=about'],
    ['link'=>'Контакты', 'href'=>'index.php?id=contact'],
    ['link'=>'Таблица умножения', 'href'=>'index.php?id=table'],
    ['link'=>'Калькулятор', 'href'=>'index.php?id=calc']
];


// текущее значение директивы post_max_size
$size=ini_get(post_max_size);
//Получаем информацию о величине размера данных
$letter = $size{strlen($size)-1};

$size=(int)$size;

switch (strtoupper($letter)) { // берем за правило при сравнивании сторок
    // переводить в соответствующий регистр
    case 'G':
        // размер в мегабайтах
        $size*=1024;
    //break; //здесь не надо
    case 'M':
        // размер в килобайтах
        $size*=1024;
    case 'K':
        // размер в байтах
        $size*=1024;
}

?>