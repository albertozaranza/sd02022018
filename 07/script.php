<?php

    $d = $_POST["d"];
    $m = $_POST["m"];
    $a = $_POST["a"];

    echo "Data atual: " . $d . " / " . $m . " / " . $a . "<br/>";

    if($m == 1){
        $total = $d;
    }else if($m == 2){
        $total = 31 + $d;
    }else if($m == 3){
        $total = 59 + $d;
    }else if($m == 4){
        $total = 90 + $d;
    }else if($m == 5){
        $total = 120 + $d;
    }else if($m == 6){
        $total = 151 + $d;
    }else if($m == 7){
        $total = 181 + $d;
    }else if($m == 8){
        $total = 212 + $d;
    }else if($m == 9){
        $total = 243 + $d;
    }else if($m == 10){
        $total = 273 + $d;
    }else if($m == 11){
        $total = 304 + $d;
    }else if($m == 12){
        $total = 334 + $d;
    }

    echo "{$total}º dia do ano";

?>