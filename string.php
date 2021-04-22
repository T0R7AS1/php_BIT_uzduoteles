<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);    echo "#1 Uzduotis <br>";
    $vardas = "Jack";
    $pavarde = "Kesy";
    echo $vardas .' '. $pavarde;

    echo "<br><br><br>";
    echo "#2 Uzduotis <br>";

    echo strtolower($vardas);
    echo "<br>";
    echo strtoupper($pavarde);

    echo "<br><br><br>";
    echo "#3 Uzduotis <br>";

    $extra = substr($vardas, 0, 1) . substr($pavarde, 0, 1);
    echo $extra;

    echo "<br><br><br>";
    echo "#4 Uzduotis <br>";

    $extra1 = substr($vardas, 1, 3) .'<br>' . substr($pavarde, 1, 3);
    echo $extra1;

    echo "<br><br><br>";
    echo "#5 Uzduotis <br>";

    $kintamasis = "An American in Paris";
    echo str_replace(['a', 'A'], '*', $kintamasis);

    echo "<br><br><br>";
    echo "#6 Uzduotis <br>";

    $kintamasis1 = "An American in Paris";
    echo "isviso mazuju a raidziu: ";
    echo substr_count($kintamasis1, 'a');
    echo " <br> isviso didziuju A raidziu: ";
    echo substr_count($kintamasis1, 'A');
    echo " <br> isviso a raidziu: ";
    echo substr_count($kintamasis1, 'a') + substr_count($kintamasis1, 'A');

    echo "<br><br><br>";
    echo "#7 Uzduotis <br>";
    $balsesTrinimas = "Breakfast at Tiffany's";
    $balsesTrinimas1 = "2001: A Space Odyssey";
    $balsesTrinimas2 = "It's a Wonderful Life";

    $balses = ["a", "A", "e", "E", "i", "I", "y", "Y", "o", "O", "u", "U"];
    $kintamasis1 = str_replace($balses, "", $kintamasis1);
    $balsesTrinimas = str_replace($balses, "", $balsesTrinimas);
    $balsesTrinimas1 = str_replace($balses, "", $balsesTrinimas1);
    $balsesTrinimas2 = str_replace($balses, "", $balsesTrinimas2);
    echo $balsesTrinimas . '<br>';
    echo $balsesTrinimas1 . '<br>';
    echo $balsesTrinimas2 . '<br>';
    echo $kintamasis1;

    echo "<br><br><br>";
    echo "#8 Uzduotis <br>";

    $string1 = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
    $output = preg_replace( '/[^0-9]/', '', $string1 );
    echo $string1. '<br>';
    echo 'Atsakymas: '.$output;

    echo "<br><br><br>";
    echo "#9 Uzduotis <br>";

    $sakinys = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
    $sakinys1 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

    $suma = 0;
    $zodziai = explode(" ", $sakinys);
    foreach ($zodziai as $key => $raides) {
        if (strlen($raides) <= 5) {
            $suma++;
            echo "<br>". $raides;
        }
    }
    echo "<br>".$suma;
    echo "<br>";
    $suma1 = 0;
    $zodziai1 = explode(" ", $sakinys1);
    foreach ($zodziai1 as $key => $raides1) {
        if (strlen($raides1) <= 5) {
            $suma1++;
            echo "<br>" . $raides1;
        }
    }
    echo "<br>" . $suma1;

    echo "<br><br><br>";
    echo "#10 Uzduotis <br>";


    $permitted_chars = 'abcdefghijklmnopqrstuvwxyz';
 
    function generate_string($input, $strength) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }
 
    echo generate_string($permitted_chars, 3);



?>

