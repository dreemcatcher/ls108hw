<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*
    Задание #2

Дана задача: На школьной выставке 80 рисунков. 23 из них выполнены фломастерами,
40 карандашами, а остальные — красками. Сколько рисунков, выполненные красками, на школьной выставке?
Описать условия и решение этой задачи на PHP. Все числа должны быть указаны из переменных.
*/
    $NumberOfImages = 80;
    $FlomasterImages= 23;
    $PencilImages=40;
    $PaintsImages= $NumberOfImages-$PencilImages-$FlomasterImages;

    echo "На школьной выставке " .$NumberOfImages. " рисунков". "<br>";
    echo $FlomasterImages. " из них выполнены фломастерами<br>";
    echo $PencilImages. " карандашами<br>";
    echo "Количество рисунков выполненных красками равно ".$NumberOfImages." минус ".$PencilImages. " минус " .$FlomasterImages."<br>";
    echo "Количество рисунков выполненных красками равно ".$PaintsImages;
?>
</body>
</html>
