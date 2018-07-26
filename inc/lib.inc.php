<?php

// Функция отрисовки таблицы
function drawTable($cols, $rows, $color){
    echo "<table border='1' width=\"200\">\n";
    for ($tr=1; $tr<=$rows; $tr++){
        echo "\t <tr> \n";
        for ($td=1; $td<=$cols; $td++) {
            if ($tr == 1 or $td == 1)
                echo "<th style='background-color: $color'>".$tr * $td."</th>\n";
            else echo "<td> ".$tr * $td."</td>\n";
        }
        echo "\t </tr> \n";
    }

    echo "</table>";
}

//Отрисовка динамического бокового меню
function drawMenu($menu, $vertical=true){
    echo "<ul>";
    $style="";
    if (!$vertical) $style="style='display:inline; margin-right:30px'";
    foreach ($menu as $item){
        echo "<li $style> <a href='$item[href]'>$item[link]</a></li>";
    }
    echo "</ul>";
}

