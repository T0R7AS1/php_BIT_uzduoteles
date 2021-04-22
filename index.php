<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    echo "#1 Uzduotis <br>";
    $vardas = "Eividas";
    $pavarde = "Galvanauskas";
    $metai = date("Y") - date("2001");
    echo "As esu $vardas $pavarde. Man yra $metai metu.";

    echo "<br><br><br>";
    echo "#2 Uzduotis <br>";

    $rand = rand(1, 4);
    $rand1 = rand(1, 4);
    $randResult = ($rand >= $rand1) ? $rand / $rand1 : $rand1 / $rand ;
    echo "$rand / $rand1 = ";
    echo round($randResult, 2);
    
    echo "<br><br><br>";
    echo "#3 Uzduotis <br>";

    $random = rand(0,25);
    $random1 = rand(0,25);
    $random2 = rand(0,25);
    echo "Pirmas random: $random <br>";
    echo "Antras random: $random1 <br>";
    echo "Trecias random: $random2 <br>";
    if (($random < $random1 && $random1 < $random2) or
        ($random2 < $random1 && $random1 < $random)) {
        echo "vidurinis skaicius tarp ju: $random1";
    }else if (($random1 < $random && $random < $random2) or
            ($random2 < $random && $random < $random1)) {
        echo "vidurinis skaicius tarp ju: $random";
    }else{
        echo "vidurinis skaicius tarp ju: $random2";
    }

    echo "<br><br><br>";
    echo "#4 Uzduotis <br>";

    $krastineA = rand(1, 10);
    $krastineB = rand(1, 10);
    $krastineC = rand(1, 10);
    
    if ($krastineA == $krastineB && $krastineA == $krastineC) {
        echo "susidaro trikampis nes visu krastiniu ilgiai yra lygus";
    }else if ($krastineC * $krastineC == $krastineA * $krastineA + $krastineB * $krastineB) {
        echo "susidaro statusis trikampis";
    }else{
        echo "nesusidaro trikampis";
    }

    echo "<br><br><br>";
    echo "#5 Uzduotis <br>";

    $randA = rand(0, 2);
    $randB = rand(0, 2);
    $randC = rand(0, 2);
    $randD = rand(0, 2);

    $suma0 = 0;
    $suma1 = 0;
    $suma2 = 0;


    if ($randA == 0) {
        $suma0++;
    }else if($randA == 1){
        $suma1++;
    }else{
        $suma2++;
    }
    if ($randB == 0) {
        $suma0++;
    }else if($randB == 1){
        $suma1++;
    }else{
        $suma2++;
    }
    if ($randC == 0) {
        $suma0++;
    }else if($randC == 1){
        $suma1++;
    }else{
        $suma2++;
    }
    if ($randD == 0) {
        $suma0++;
    }else if($randD == 1){
        $suma1++;
    }else{
        $suma2++;
    }
    echo "$randA $randB $randC $randD <br>";
    echo "Nuliu buvo: $suma0 <br>";
    echo "Vienetu buvo: $suma1 <br>";
    echo "Dvejetu buvo: $suma2 <br>";

    echo "<br><br><br>";
    echo "#6 Uzduotis <br>";

    $randh = rand(1, 6);

    echo "<h$randh> $randh </h$randh>";

    echo "<br><br><br>";
    echo "#7 Uzduotis <br>";
    
    $randMinus = rand(-10, 10);
    $randMinus1 = rand(-10, 10);
    $randMinus2 = rand(-10, 10);

    if ($randMinus < 0) {
        echo "<strong style = color:green> $randMinus <br></strong>";
    }else if ($randMinus == 0) {
        echo "<strong style = color:red> $randMinus <br></strong>";
    }else{
        echo "<strong style = color:blue> $randMinus <br></strong>";
    }
    if ($randMinus1 < 0) {
        echo "<strong style = color:green> $randMinus1 <br></strong>";
    }else if ($randMinus1 == 0) {
        echo "<strong style = color:red> $randMinus1 <br></strong>";
    }else{
        echo "<strong style = color:blue> $randMinus1 <br></strong>";
    }
    if ($randMinus2 < 0) {
        echo "<strong style = color:green> $randMinus2 <br></strong>";
    }else if ($randMinus2 == 0) {
        echo "<strong style = color:red> $randMinus2 <br></strong>";
    }else{
        echo "<strong style = color:blue> $randMinus2 <br></strong>";
    }

    echo "<br><br><br>";
    echo "#8 Uzduotis <br>";

    $zvakes = rand(5, 3000);
    $kaina = 1;
    if ($zvakes >= 1000) {
        $akcija = $kaina/100 * 97;
        $kaina = $akcija;
    } else if ($zvakes >= 2000) {
        $akcija = $kaina/100 * 96;
        $kaina = $akcija;
    }
    $sumoketa = $zvakes * $kaina;
    echo "Perkama zvakiu: $zvakes <br> ";
    echo "Sumoketa: $sumoketa Eur";

    echo "<br><br><br>";
    echo "#9 Uzduotis <br>";

    $skaicius = rand(0, 100);
    $skaicius1 = rand(0, 100);
    $skaicius2 = rand(0, 100);
    $vidurkis = ($skaicius + $skaicius1 + $skaicius2) / 3;
    echo "Aritmetinis vidurkis neatmetus mazas ir dideles reiksmes ($skaicius + $skaicius1 + $skaicius2) / 3 =";
    echo round($vidurkis, 2);
    if ($skaicius < 10) {
        $skaicius = 0;
    }
    if ($skaicius > 90) {
        $skaicius = 0;
    }
    if ($skaicius1 < 10) {
        $skaicius1 = 0;
    }
    if ($skaicius1 > 90) {
        $skaicius1 = 0;
    }
    if ($skaicius2 < 10) {
        $skaicius2 = 0;
    }
    if ($skaicius2 > 90) {
        $skaicius2 = 0;
    }
    $vidurkis = ($skaicius + $skaicius1 + $skaicius2) / 3;
    echo " <br> Aritmetinis vidurkis atmetus mazas ir dideles reiksmes ($skaicius + $skaicius1 + $skaicius2) / 3 = ";
    echo round($vidurkis, 2);
    
    echo "<br><br><br>";
    echo "#10 Uzduotis <br>";

    $valandos = rand(0, 23);
    $minutes = rand(0, 59);
    $sekundes = rand(0, 59);
    $extraSekundes = rand(1, 300);
    echo "Dabar yra: $valandos valanda $minutes minutes $sekundes sekundes <br>";
    $sekundes += $extraSekundes;
    
    while ($sekundes >= 60) {
        $minutes++;
        $sekundes -= 60;
        while($minutes >= 60) {
            $valandos++;
            $minutes -= 60;
        }
    }
    echo "Dabar yra: $valandos valanda $minutes minutes $sekundes sekundes";
?>
