<?php
//Вывод нечетных чисел из заданного диапазона

//границы диапазона
$firstNum=1;
$lastNum=50;

for ($i=$firstNum; $i<=$lastNum; $i++){
    if ($i%2 != 0) echo $i."\n <br>";
}
