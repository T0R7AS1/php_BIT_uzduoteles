<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    echo "#1 Uzduotis <br>";
    for ($i=0; $i <= 29; $i++) { 
        $numbers[$i] = rand(5, 25);
    }
    foreach ($numbers as $key => $value) {
        echo $key . "----->" . $value . "<br>";
    }

    echo "<br><br><br>";
    echo "#2.A.B.C Uzduotis <br>";

    $didesni = 0;
    $didziausias = 0;
    $suma = 0;
    foreach ($numbers as $key => $value) {
        if ($value > 10) {
            $didesni++;
        }
        $didziausias = max($numbers);
        echo $value.' ';
        $suma += $value;
    }
    echo '<br> Isviso didesniu uz 10 yra: ' .$didesni;
    echo '<br> Didziausias skaicius yra: ' .$didziausias;
    echo '<br> Visu skaiciu suma yra: ' .$suma . '<br>';


    echo "<br><br><br>";
    echo "#2.D  Uzduotis <br>";
    

    $masyvas = $numbers;
    foreach ($masyvas as $key => $value) {
        echo "<br>". $key . "--->" . $value - $key;
    }


    echo "<br><br><br>";
    echo "#2.E  Uzduotis <br>";


    for ($i=0; $i < 10; $i++) { 
        array_push($masyvas, rand(5, 25));
    }
    foreach ($masyvas as $key => $value) {
        echo "<br>".$key . "----->" . $value;
    }


    echo "<br><br><br>";
    echo "#2.F  Uzduotis <br>";

    $nePorinisMasyvas = [];
    $porinisMasyvas = [];
    foreach ($masyvas as $key => $value) {
        if ($key % 2 == 1) {
            $nePorinisMasyvas[$key] = $value;
        }else{
            $porinisMasyvas[$key] = $value;
        }
    }
    foreach ($nePorinisMasyvas as $key => $value) {
        echo '<br> Neporinis masyvas: '.$key . "---->" . $value;
    }
    foreach ($porinisMasyvas as $key => $value) {
        echo '<br> Porinis masyvas: '.$key . "---->" . $value;
    }


    echo "<br><br><br>";
    echo "#2.G  Uzduotis <br>";


    foreach ($masyvas as $key => $value) {
        if ($key % 2 == 0) {
            $porinisMasyvas[$key] = $value;
        }
    }
    foreach ($porinisMasyvas as $key => $value) {
        if ($value > 15 ) {
            $value = 0;
            echo '<div style="color: red"> Porinis masyvas buvo daugiau uz 15: '.$key . "---->" . $value . '</div>';
        }else{
            echo '<div style="color: blue"> Porinis masyvas buvo maziau uz 15: '.$key . "---->" . $value . '</div>';
        }
    }


    echo "<br><br><br>";
    echo "#2.H  Uzduotis <br>";


    foreach ($masyvas as $key => $value) {
        if ($value > 10) {
            echo "Tai buvo $key indeksas kurio reiksme buvo: $value";
            break;
        }
    }


    echo "<br><br><br>";
    echo "#2.I  Uzduotis <br>";


    foreach ($masyvas as $key => $value) {
        if ($key % 2 == 1) {
            unset($masyvas[$key]);
            echo "<br>". $key . "---->" . $value;
        }
    }


    echo "<br><br><br>";
    echo "#3  Uzduotis <br>";

    $aSuma = 0;
    $bSuma = 0;
    $cSuma = 0;
    $dSuma = 0;

    for ($i=0; $i < 200; $i++) { 
        $int = rand(0,3);
        $a_z = ['A', 'B', 'C', 'D'];
        $rand_letter[$i] = $a_z[$int];
    }
    foreach ($rand_letter as $key => $value) {
        if ($value == 'A') {
            $aSuma++;
        }elseif ($value == 'B') {
            $bSuma++;
        }elseif ($value == 'C') {
            $cSuma++;
        }else{
            $dSuma++;
        }
    }
    echo "A raidziu buvo: $aSuma <br>";
    echo "B raidziu buvo: $bSuma <br>";
    echo "C raidziu buvo: $cSuma <br>";
    echo "D raidziu buvo: $dSuma <br>";


    echo "<br><br><br>";
    echo "#4  Uzduotis <br>";

    sort($rand_letter);
    foreach ($rand_letter as $key => $value) {
        echo $value . ' ';
    }


    echo "<br><br><br>";
    echo "#5  Uzduotis <br>";


    for ($i=0; $i < 200; $i++) { 
        $int1 = rand(0,3);
        $int2 = rand(0,3);
        $int3 = rand(0,3);
        $a_z = ['A', 'B', 'C', 'D'];
        $rand_letter1[$i] = $a_z[$int1];
        $rand_letter2[$i] = $a_z[$int2];
        $rand_letter3[$i] = $a_z[$int3];
        $final[$i] = $rand_letter1[$i] . $rand_letter2[$i] . $rand_letter3[$i];
    }

    $uniqueArr = array_unique($final);
    echo 'isviso unikaliu reiksmiu yra: '. count($uniqueArr);


    echo "<br><br><br>";
    echo "#6  Uzduotis <br>";


    $array1 = [];
    $array2 = [];
    for($i = 0; count($array1) < 100; $i++){
        $number = rand(100, 999);
            if(!in_array($number, $array1)){
                array_push($array1, $number);
            }
    }
    for($i = 0; count($array2) < 100; $i++){
        $number = rand(100, 999);
            if(!in_array($number, $array2)){
                array_push($array2, $number);
            }
    }
    foreach ($array1 as $key => $value) {
        echo "<br>". $key . "---->" . $value;
    }
    echo "<br><br><br>";
    foreach ($array2 as $key => $value) {
        echo "<br>". $key . "---->" . $value;
    }

    
    echo "<br><br><br>";
    echo "#7  Uzduotis <br>";

    $arrayUnique = [];
    foreach($array1 as $val){
        if(in_array($val, $array1) !== in_array($val, $array2)){
            array_push($arrayUnique, $val);
        }
    }

    foreach ($arrayUnique as $key => $value) {
        echo "<br>". $key . "---->" . $value;
    }



    echo "<br><br><br>";
    echo "#8  Uzduotis <br>";


    $arrayUnique1 = [];

    foreach($array1 as $val){
        if(in_array($val, $array1) === in_array($val, $array2)){
            array_push($arrayUnique1, $val);
        }
    }
    foreach ($arrayUnique1 as $key => $value) {
        echo "<br>". $key . "---->" . $value;
    }

    echo "<br><br><br>";
    echo "#9  Uzduotis <br>";


    $sameIndex = array_combine($array1, $array2);
    

    foreach ($sameIndex as $key => $value) {
        echo "<br>". $key . "---->" . $value;
    }


    echo "<br><br><br>";
    echo "#10  Uzduotis <br>";


    $randomPlus = [];
    $j = 3;
    $k = 2;
    $l = 1;
    
    for ($i=1; $i <=10 ; $i++) {
        if ($i == $j) {
            $randomPlus[$i] = $randomPlus[$k] + $randomPlus[$l];
            $j++;
            $k++;
            $l++;
        } else{
            $randomPlus[$i] = rand(5, 25);
        }
    }
    foreach ($randomPlus as $key => $value) {
    echo "<br>". $key . "---->" . $value;
    }


    echo "<br><br><br>";
    echo "#11  Uzduotis <br>";

?>