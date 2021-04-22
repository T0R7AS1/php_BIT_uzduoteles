<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    echo "#1 Uzduotis <br>";
    function h1($tekstas){
        echo "<h1> $tekstas </h1>";
    };

    h1("hello world :)");


    echo "<br><br><br>";
    echo "#2 Uzduotis <br>";


    function h($tekstas, $tagas){
        echo "<h$tagas> $tekstas </h$tagas>";
    }

    h("hello world again :|", 4);

    echo "<br><br><br>";
    echo "#3 Uzduotis <br>";


    $string = md5(time());

    $skaitmenys = $string;
    for ($i=0; $i < strlen($string); $i++) { 
        if (ctype_digit($string[$i])) {
            h1($string[$i]);
        }else{
            echo $string[$i];
        }
    }


    echo "<br><br><br>";
    echo "#4 Uzduotis <br>";

    function sveikisk($skaicius){
        if (is_float($skaicius) || is_string($skaicius) || is_null($skaicius)) {
            echo "False number";
            return false;
        }
        $divider = 2;
        $count = 0;
        do {
            if ($skaicius % $divider == 0) {
                $count++;
            }
            $divider++;
        } while ($skaicius > $divider);
        return $count;
    }
    
    echo sveikisk(43);


    echo "<br><br><br>";
    echo "#5 Uzduotis <br>";

    for ($i=0; $i < 100; $i++) { 
        $masyvas[$i] = rand(33, 77);
    }
    foreach ($masyvas as $key => $value) {
        echo $key . '----->' . $value . '<br>';
    }
    foreach ($masyvas as $key => $value) {
        $masyvas[$key] = sveikisk($masyvas[$value]);
    }
 
    arsort($masyvas);
    echo "<pre>";
    print_r($masyvas);


    echo "<br><br><br>";
    echo "#6 Uzduotis <br>";



    for ($i=0; $i < 100; $i++) { 
        $masyvas1[$i] = rand(333, 777);
    }
    foreach ($masyvas1 as $key => $value) {
        if (sveikisk($value) == 0) {
            unset($masyvas1[$key]);
        }
    }
    print_r($masyvas1);


    echo "<br><br><br>";
    echo "#7 Uzduotis <br>";


    $atsitiktinis = rand(20, 20);
    for ($i=10; $i < $atsitiktinis; $i++) { 
        $masyvas2[$i] = 0;
    }
    foreach ($masyvas2 as $key => $value) {
        if (end($masyvas2)) {
            $masyvas2[$key] = 0;
        }else{
            $masyvas2[$key] = rand(0, 10);
        }
    }
    foreach ($masyvas2 as $key => $value) {
        echo $key . '----->' . $value . '<br>';
    }






?>