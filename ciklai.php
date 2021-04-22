<link rel="stylesheet" href="./ciklai.css">
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    echo "#1 Uzduotis <br>";
    $j = 49;
    for ($i=0; $i < 400; $i++) {
    ?>
    <div style = "display: inline-block; ">*</div> 
    <?php
        if ($i == $j) {
            ?>
            <br>
            <?php
            $j += 50;
        }
    }

    echo "<br><br><br>";
    echo "#2 Uzduotis <br>";

    $didesni = 0;
    $randS = rand(0, 300);
    for ($i=0; $i <= $randS; $i++) { 
        if ($i > 275) {
            echo '<div style = "color: red; display: inline-block";>'. $i . "</div>" ." ";
        }else{
        echo $i . " ";
        }
        if ($i > 150) {
            $didesni++;
        }
    }
    echo '<br><br> <div style = "color: red"> Isviso uz 150 didesniu yra: '.$didesni . "</div>";

    echo "<br><br><br>";
    echo "#3 Uzduotis <br>";

    $atsitiktinis = rand(3000, 4000);

    for ($i=1; $i < $atsitiktinis; $i++) { 
        if ($i % 77 == 0) {
            echo $i . ", ";
        }
    }

    echo "<br><br><br>";
    echo "#4 ir 5 Uzduotys <br>";

    $j = 100;
    echo '<div class = "border">';
    for ($i=1; $i <= 10000; $i++) { 
        if ($i == $j) {
            echo '<div style = "display: inline-block;">* </div>'. " " . "<br>";
            $j += 100;
        }else{
            echo '<div style = "display: inline-block;">*</div>' . " ";
        }
    }
    echo '</div>';

    echo "<br><br><br>";
    echo "#6.A Uzduotis <br>";
    do {
        $monetaA = rand(0, 1);
        if ($monetaA == 0) {
            echo "H <br>";
        }else if ($monetaA == 1) {
            echo "S <br>";
        }
    } while ($monetaA != 0);

    echo "<br><br><br>";
    echo "#6.B Uzduotis <br>";

    $herbasB = 0;
    do {
        $monetaB = rand(0, 1);
        if ($monetaB == 0) {
            echo "H <br>";
            $herbasB++;
        }else if ($monetaB == 1) {
            echo "S <br>";
        }
    } while ($herbasB != 3);

    echo "<br><br><br>";
    echo "#6.C Uzduotis <br>";


    $herbasC = 0;
    do {
        $monetaC = rand(0, 1);
        if ($monetaC == 0) {
            echo "H <br>";
            $herbasC++;
        }else if ($monetaC == 1) {
            echo "S <br>";
            $herbasC = 0;
        }
    } while ($herbasC != 3);


    echo "<br><br><br>";
    echo "#7 Uzduotis <br>";
    $petras = 0;
    $kazys = 0;
    
    while ($petras <= 222 || $kazys <= 222) {
        $petras += rand(10, 20);
        $kazys += rand(5, 25);

        if ($petras >= 222 && $kazys >= 222) {
            echo "Partiją laimėjo: ​draugyste abu pabaige zaidima per ta pati ejima";
            break;
        }
        if ($petras >= 222) {
            echo "Partiją laimėjo: ​petras su: " . $petras . " tasku ";
            break;
        }
        if ($kazys >= 222) {
            echo "Partiją laimėjo: ​kazys su: " . $kazys . " tasku ";
            break;
        }
    };

    echo "<br><br><br>";
    echo "#8 Uzduotis <br>";


    
    $j = 21;
    echo '<div class = "rombas">';
    for ($i=1; $i <= 441; $i++) { 
        $rgbColor = array();
       foreach(array('r', 'g', 'b') as $color){
            $rgbColor[$color] = mt_rand(0, 255);
        }
        if ($i == $j) {
            ?>
            <p style="color: rgb(<?= implode(",", $rgbColor); ?>);">* <br></p>
            <?php
            $j += 21;
        }else{
            ?>
            <p style="color: rgb(<?= implode(",", $rgbColor); ?>);">* </p>
            <?php
        }
    }
    echo '</div>';

    echo "<br><br><br>";
    echo "#9 Uzduotis <br>";

    $t1 = microtime(true);
    for ($i=0; $i < 1000000 ; $i++) {
        $c = "10 bezdzioniu \n suvalge 20 bananu.";
    }
    $t2 = microtime(true);
    $galutinis = $t2 - $t1;
    echo $galutinis . "<br>";

    $t3 = microtime(true); 
    for ($i=0; $i < 1000000 ; $i++) {
        $c = '10 bezdzioniu \n suvalge 20 bananu.';
    }
    $t4 = microtime(true);
    $galutinis2 = $t4 - $t3;
    echo $galutinis2 . "<br>";

    if ($galutinis > $galutinis2) {
        echo "dvigubos kabutes iveike koda greiciau";
    }elseif ($galutinis2 > $galutinis) {
        echo "viengubos kabutes iveike koda greiciau";
    }else{
        echo "abudu iveike koda tuo paciu metu";
    }

    echo "<br><br><br>";
    echo "#10.A Uzduotis <br>";
    $lenta = 85;
    $smugiai = 0;
    $vinis1 = 0;
    $vinis2 = 0;
    $vinis3 = 0;
    $vinis4 = 0;
    $vinis5 = 0;
    while ($vinis1 < $lenta && $vinis2 < $lenta && $vinis3 < $lenta && $vinis4 < $lenta && $vinis5 < $lenta) {
        $smugiai++;
        $vinis1 += rand(5, 20);
        $vinis2 += rand(5, 20);
        $vinis3 += rand(5, 20);
        $vinis4 += rand(5, 20);
        $vinis5 += rand(5, 20);
        if ($vinis1 >= $lenta) {
            echo "pirmas vinis laimejo nes ikale 8.5cm i lenta greiciausiai  su: $smugiai smugiais";
        }elseif ($vinis2 >= $lenta) {
            echo "antras vinis laimejo nes ikale 8.5cm i lenta greiciausiai  su: $smugiai smugiais";
        }elseif ($vinis3 >= $lenta) {
            echo "trecias vinis laimejo nes ikale 8.5cm i lenta greiciausiai  su: $smugiai smugiais";
        }elseif ($vinis4 >= $lenta) {
            echo "ketvirtas vinis laimejo nes ikale 8.5cm i lenta greiciausiai  su: $smugiai smugiais";
        }elseif ($vinis5 >= $lenta) {
            echo "penktas vinis laimejo nes ikale 8.5cm i lenta greiciausiai  su: $smugiai smugiais";
        }
    };

    echo "<br><br><br>";
    echo "#10.B Uzduotis <br>";

    $stiprusSmugiai = 0;
    $stipresnisVinis1 = 0;
    $stipresnisVinis2 = 0;
    $stipresnisVinis3 = 0;
    $stipresnisVinis4 = 0;
    $stipresnisVinis5 = 0;
    while ($stipresnisVinis1 < $lenta && $stipresnisVinis2 < $lenta && $stipresnisVinis3 < $lenta && $stipresnisVinis4 < $lenta && $stipresnisVinis5 < $lenta) {
        $stiprusSmugiai++;
        $pirmoTikimybe = rand(0, 1);
        $antroTikimybe = rand(0, 1);
        $trecioTikimybe = rand(0, 1);
        $ketvirtoTikimybe = rand(0, 1);
        $penktoTikimybe = rand(0, 1);
        if ($pirmoTikimybe == 0) {
            $stipresnisVinis1 += 0;
        }else{
            $stipresnisVinis1 += rand(20, 30);
        }
        if ($antroTikimybe == 0) {
            $stipresnisVinis2 += 0;
        }else{
            $stipresnisVinis2 += rand(20, 30);
        }
        if ($trecioTikimybe == 0) {
            $stipresnisVinis3 += 0;
        }else{
            $stipresnisVinis3 += rand(20, 30);
        }
        if ($ketvirtoTikimybe == 0) {
            $stipresnisVinis4 += 0;
        }else{
            $stipresnisVinis4 += rand(20, 30);
        }
        if ($penktoTikimybe == 0) {
            $stipresnisVinis5 += 0;
        }else{
            $stipresnisVinis5 += rand(20, 30);
        }
        if ($stipresnisVinis1 >= $lenta) {
            echo "pirmas vinis laimejo ikales 8.5cm i lenta greiciausiai  su: $stiprusSmugiai stipriaisSmugiais";
        }elseif ($stipresnisVinis2 >= $lenta) {
            echo "antras vinis laimejo ikales 8.5cm i lenta greiciausiai  su: $stiprusSmugiai stipriaisSmugiais";
        }elseif ($stipresnisVinis3 >= $lenta) {
            echo "trecias vinis laimejo ikales 8.5cm i lenta greiciausiai  su: $stiprusSmugiai stipriaisSmugiais";
        }elseif ($stipresnisVinis4 >= $lenta) {
            echo "ketvirtas vinis laimejo ikales 8.5cm i lenta greiciausiai  su: $stiprusSmugiai stipriaisSmugiais";
        }elseif ($stipresnisVinis5 >= $lenta) {
            echo "penktas vinis laimejo ikales 8.5cm i lenta greiciausiai  su: $stiprusSmugiai stipriaisSmugiais";
        }
    };

    echo "<br><br><br>";
    echo "#11 Uzduotis <br>";

    function IsPrimeOrNot($n){
        for($i=2; $i<$n; $i++){
            if($n % $i ==0){
            return 0;
            }
        }
        return 1;
    }

    $string = 50;
    $numbers = range(1,200);
    shuffle($numbers);
    for($i = 0; $i < $string; $i++){
       	$digits = $numbers[$i];
        echo $digits. " ";
    }
    echo "<br> Pirminiai numeriai: <br>";
    for ($i=0; $i < $string; $i++) { 
        $digits = $numbers[$i];
        $a = IsPrimeOrNot($digits);
        if ($a!=0){
            echo $digits . " ";
        }
    }
?>