<?php

//Убеждаемся, что передача данных передаваемых веб-формой
//осуществлена методом POST
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Приём данных из формы и их фильтрация
    $num1 = (int) $_POST['num1'];
    $num2 = (int) $_POST['num2'];
    $operator = trim(strip_tags($_POST['operator']));

    // Убеждаемся, что все данные пришли со значениями
    if (!($num1 && $num2)) echo 'Введите все числа! <br>';
    if (!$operator) echo 'Введите оператор! <br>';

    //Получение необходимого результата
    switch ($operator){
        case ('+'):
            $result=$num1+$num2;
            break;
        case ('-'):
            $result=$num1-$num2;
            break;
        case ('*'):
            $result=$num1*$num2;
            break;
        case ('/'):
            if ($num2 == 0) echo 'Делить на 0 нельзя!';
            $result=$num1/$num2;
            break;
        default:
            // Убеждаемся что операция верная
            if ($operator && !in_array($operator, ['+','-','*', '/']))
                echo 'Введите операцию! <br>';
    }
}

?>

    <!-- Область основного контента -->
<?php
//Вывод результата и проверка работы
if (isset($result))
    echo 'Результат '.$num1.' '.$operator.' '.$num1.' = '.$result;

?>
    <form action='<?= $_SERVER['REQUEST_URI']?>' method='POST'>
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
    <!-- Область основного контента -->
