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

    $str='At this moment we have some problems with Content and some more words bla bla bla';
    echo $str."<br>";
    $pieces = explode(" ", $str);

    echo "<pre>";
    print_r ($pieces);
    echo "</pre>";

    echo "<br>";

    $FinalPhrase = '';
    // Нумерация массива с нуля
    $i=0;

    while (count($pieces)>$i){
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


    // развернуть массив всмысле в одратном порядке?
    $j=(count($pieces)-1);
    $FinalPhraseReverse = '';
    while ($j>-1){
        // Получаем номер элемента массива
        $PasteBackOrder = $pieces[$j];
        echo "Номер элемента массива $j Приклеиваем слово {$PasteBackOrder}\n";
        echo "<br>";
        // Используем любой символ кроме пробела. "_" Будет таким символом.
        $FinalPhraseReverse = $FinalPhraseReverse ."_". $PasteBackOrder;
        $j--;
    }
    echo "<br>";
    echo "<br>";
    echo "Итоговая склейка<br>";
    echo $FinalPhraseReverse."<br>";

?>
</body>
</html>