<?php

    $m10 = $_POST["m10"];
    $m25 = $_POST["m25"];
    $m50 = $_POST["m50"];

    $total = ($m10/10)+($m25/4)+($m50/2);

    $a = 0;
    $b = 0;
    $c = 0;
    $d = 0;
    $e = 0;
    $f = 0;
    $g = 0;
    $h = 0;
    $i = 0;
    $j = 0;
    $k = 0;
    $l = 0;

    $n = $total * 100;

    while($n>=10000){
        $a++;
        $n=$n-10000;
    }
    while($n>=5000){
        $b++;
        $n = $n-5000;
    }
    while($n>=2000){
        $c++;
        $n = $n-2000;
    }
    while($n>=1000){
        $d++;
        $n = $n-1000;
    }
    while($n>=500){
        $e++;
        $n = $n-500;
    }
    while($n>=200){
        $f++;
        $n = $n-200;
    }

    while($n>=50){
        $h++;
        $n = $n-50;
    }

    while($n>=25){
        $i++;
        $n = $n-25;
    }

    while($n>=10){
        $j++;
        $n = $n-10;
    }

    echo "NOTAS: <br/><br/>";

    echo "Nota(s) de R$ 100.00: " . $a . "<br/>";
    echo "Nota(s) de R$ 50.00: " . $b . "<br/>";
    echo "Nota(s) de R$ 20.00: " . $c . "<br/>";
    echo "Nota(s) de R$ 10.00: " . $d . "<br/>";
    echo "Nota(s) de R$ 5.00: " . $e . "<br/>";
    echo "Nota(s) de R$ 2.00: " . $f . "<br/><br/>";
    
    echo "MOEDAS: <br/><br/>";
    echo "Moeda(s) de R$ 0.50: " . $h . "<br/>";
    echo "Moeda(s) de R$ 0.25: " . $i . "<br/>";
    echo "Moeda(s) de R$ 0.10: " . $j . "<br/>";

?>