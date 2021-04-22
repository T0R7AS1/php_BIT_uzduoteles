<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    echo "#1 Uzduotis <br>";



    $masyvas[][] =[];
    for ($i=0; $i < 10; $i++) {
        for ($j=0; $j < 5; $j++) { 
            $masyvas[$i][$j] = rand(5, 25);
        }
    }
    foreach ($masyvas as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
    }

    echo "<br><br><br>";
    echo "#2.A.B Uzduotis <br>";

    $didesni_uz_10 = 1;
    $j = 0;
    $max = 0;

    foreach ($masyvas as $key => $value) {
        foreach ($value as $key1 => $val) {
            if ($val > 10) {
                $didesni_uz_10++;
            }
            if ($val > $max) {
                $max = $val;
            }
        }
    }
    echo 'Didesniu uz 10 yra: '.$didesni_uz_10 . '<br>';
    echo 'Didziausia reiksme: '. $max;

    
    echo "<br><br><br>";
    echo "#2.C Uzduotis";


    foreach ($masyvas as $key => $value) {
        $suma[$key] = 0;
        foreach ($value as $key1 => $val) {
            $suma[$key] += $val;
        }
    }

    foreach ($suma as $key => $value) {
        echo '<br>'.$key.'suma: '. '---->'. $value;
    }
    

    echo "<br><br><br>";
    echo "#2.D Uzduotis <br>";


    foreach ($masyvas as $key => $value) {
        for ($i=0; $i < 2; $i++) { 
            array_push($masyvas[$key], rand(5,25));
        }
    }

    foreach ($masyvas as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
    }

    echo "<br><br><br>";
    echo "#2.E Uzduotis <br>";

    foreach ($masyvas as $key => $value) {
        $suma[$key] = 0;
        foreach ($value as $key1 => $val) {
            $suma[$key] += $val;
        }
    }
    foreach ($suma as $key => $value) {
        echo '<br>'.$key.'suma: '. '---->'. $value;
    }

    echo "<br><br><br>";
    echo "#3 Uzduotis <br>";


    function generate_string($input, $strength) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }
    $permitted_chars = 'abcdefghijklmnopqrstuvwxyz';
    for ($i=0; $i < 10; $i++) { 
        $randomas = rand(2,20);
        for ($j=0; $j < $randomas; $j++) { 
            $array[$i][$j] = generate_string(strtoupper($permitted_chars), 1);
            sort($array[$i]);
        }
    }
    
    foreach ($array as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
    }


    echo "<br><br><br>";
    echo "#4 Uzduotis <br>";
    

    sort($array);
    $index = 0;

    foreach ($array as $key => $value) {
        foreach ($value as $key1 => $val) {
            if ($val == 'K') {
                $out = array_splice($array, $key, 1);
                array_splice($array, $index, 0, $out);
                $index++;
                break;
            }
        }
    }
    foreach ($array as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
    }


    echo "<br><br><br>";
    echo "#5 Uzduotis <br>";



    $users = [];
    $check_arr = [];
    do { 
        $random1 = rand(1, 100);
        $random2 = rand(0, 100);
        if (!in_array($random1, $check_arr)){
            $users[sizeof($users)]['user_id'] = $random1;
            $users[sizeof($users)-1]['place_in_row'] = $random2;
            array_push($check_arr, $random1);
        }
    } while(sizeof($users) < 30);
    foreach ($users as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
        echo '<br>';
    }


    echo "<br><br><br>";
    echo "#6 Uzduotis <br>";


    $column = array_column($users, 'user_id');
    array_multisort($users, SORT_ASC, $column);
    foreach ($users as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
        echo '<br>';
    }
    $column1 = array_column($users, 'place_in_row');
    array_multisort($column1, SORT_DESC, $users);
    foreach ($users as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
        echo '<br>';
    }


    echo "<br><br><br>";
    echo "#7 Uzduotis <br>";


    foreach ($users as $key => $value) {
        $random_string1 = '';
        $random_length1 = rand(5, 15);
        for ($i=0; $i < $random_length1; $i++) { 
            $random_string1 .= chr(rand(65, 90));
        }
        $random_string2 = '';
        $random_length2 = rand(5, 15);
        for ($i=0; $i < $random_length2; $i++) { 
            $random_string2 .= chr(rand(65, 90));
        }
        $users[$key]['name'] = $random_string1;
        $users[$key]['surname'] = $random_string2;
    }
    foreach ($users as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
        echo '<br>';
    }


    echo "<br><br><br>";
    echo "#8 Uzduotis <br>";

    $a8 = [];
    for($i = 0;$i < 10; $i++) {
        $randN = rand(0, 5);
        for($j = 0; $j <= $randN; $j++){
            if ($randN == 0){
                $a8[$i] = rand(0, 10);
            }else{
                $a8[$i][$j] = rand(0, 10);
            }
        }
    }
    echo '<pre>';
    print_r($a8);


    echo "<br><br><br>";
    echo "#9 Uzduotis <br>";


    

    echo "<br><br><br>";
    echo "#10 Uzduotis <br>";


    for ($i=0; $i < 10; $i++) { 
        $masyv[$i] = $masyv1[$i];
    }
    foreach ($masyv as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
    }
?>