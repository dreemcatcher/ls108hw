<?php
error_reporting(-1);
?><!doctype html>
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
    print_r ($pieces);
    echo "<br>";

    $FinalPhrase = '';
    // Нумерация массива с нуля
    $i=0;

    while ($i<count($pieces)){
        // Получаем номер элемента массива
        $PasteBack = $pieces[$i];
        echo "Номер элемента массива $i Приклеиваем слово {$PasteBack}\n";
        echo "<br>";
        // Используем любой символ кроме пробела. "_" Будет таким символом.
        $FinalPhrase = $FinalPhrase ."_". $PasteBack;
        $i++;
    }
echo "<br>";
echo "<br>";
echo "Итоговая склейка<br>";
echo $FinalPhrase."<br>";
?>
</body>
</html>