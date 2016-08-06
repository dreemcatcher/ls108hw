<?php
    error_reporting(-1);
    $bmw = array (
        'model' => 'X5',
        'speed' => 120,
        'doors' => 5,
        'year' => "2015"
    );

     echo '<pre>';
     print_r($bmw);
     echo '</pre>';

    $toyota = array (
        'model' => 'LC',
        'speed' => 120,
        'doors' => 5,
        'year' => "2010"
    );

    echo '<pre>';
    print_r($toyota);
    echo '</pre>';

    $opel = array (
        'model' => 'Mokka',
        'speed' => 120,
        'doors' => 5,
        'year' => "2014"
    );

    echo '<pre>';
    print_r($opel);
    echo '</pre>';

    //Объедините три массива в один многомерный массив

?>