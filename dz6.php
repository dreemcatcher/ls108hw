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
  /*  $cars = array(array ( 'mark' => 'bmw', 'model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => "2015"),
            array ( 'mark' => 'Toyota', 'model' => 'LC', 'speed' => 120, 'doors' => 5, 'year' => "2010"),
            array ( 'mark' => 'Opel', 'model' => 'Mokka', 'speed' => 120, 'doors' => 5, 'year' => "2014")
    );

    echo '<pre>';
    print_r($cars);
    echo '</pre>';
  */
/*
    for ($i = 0; $i < count($cars); $i++)
    {
        foreach ($cars[$i] as $valuee => $val) {
            echo "<table border='1'><tr><td>";
            echo $val."<br>";
            echo $cars[$i]['mark'];
            echo "&nbsp&nbsp&nbsp";
            echo $cars[$i]['model'];
            echo "&nbsp&nbsp&nbsp";
            echo $cars[$i]['speed'];
            echo "&nbsp&nbsp&nbsp";
            echo $cars[$i]['doors'];
            echo "&nbsp&nbsp&nbsp";
            echo $cars[$i]['year'];
            echo "</td></tr></table>";
        }
        echo '<br />';
    }
*/
    for ($i = 0; $i < count($cars); $i++)
    {
            echo "<table border='1'><tr><td>";
            echo $cars[$i]['mark']."<br>";
            echo $cars[$i]['mark'];
            echo "&nbsp&nbsp&nbsp";
            echo $cars[$i]['model'];
            echo "&nbsp&nbsp&nbsp";
            echo $cars[$i]['speed'];
            echo "&nbsp&nbsp&nbsp";
            echo $cars[$i]['doors'];
            echo "&nbsp&nbsp&nbsp";
            echo $cars[$i]['year'];
            echo "</td></tr></table>";

        echo '<br />';
    }
?>