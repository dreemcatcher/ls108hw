<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
/*
    Задание #3

Создайте константу и присвойте ей значение.
Проверьте, существует ли константа, которую Вы хотите использовать
Выведите значение созданной константы
Попытайтесь изменить значение созданной константы.
 */
    define ("SOMECONSTANT", "SomeConstantContent");

    if (defined("SOMECONSTANT")){
        echo "Константа существует";
        echo "<br>";
        echo SOMECONSTANT;
        //SOMECONSTANT=1;
    }
    else
    {
        echo "Константа не существует";
    }
?>