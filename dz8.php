<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*
    Задание #8

Создайте переменную $str, которой присвойте строковое значение,
содержащее отдельные слова разделённые пробелом. Выведите строку на экран.
Затем разбейте строку на массив. Выведите массив. Затем используя циклы
while или do-while (на ваше усмотрение) развернуть массив и склеить в
строку используя любой символ, кроме пробела. Вывести результат.
*/

    $str='String Content and some more words bla bla bla';
    echo $str."<br>";
    $pieces = explode(" ", $str);
    print $pieces;
    echo "<br>";

    $i=1;
    while ($i<count($pieces)){
        echo
        $i++;
    }
?>
</body>
</html>