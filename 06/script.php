<?php

    $d = $_POST["d"];
    $m = $_POST["m"];
    $a = $_POST["a"];

    echo "Data atual: " . $d . " / " . $m . " / " . $a . "<br/>";

    $m = $m + 1;
    if($m == 13){
        $m = 1;
        $a += 1;
    }

    echo "Prazo de vencimento: 1 mês<br/>";
    echo "Vencimento: " . $d . " / " . $m . " / " . $a . "<br/>";

?>